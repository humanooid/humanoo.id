<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Models\Post_tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function index()
    {
        return view('b.dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    public function posts()
    {
        return view('b.posts', [
            'title' => 'Posts',
            'posts' => Post::with(['author', 'category'])->orderBy('published_at', 'desc')->orderBy('id', 'desc')->paginate(10),
        ]);
    }
    public function makeapost()
    {
        return view('b.makeapost', [
            'title' => 'Make a Post',
            'categories' => \App\Models\Category::all(),
            'tags' => \App\Models\Tag::all(),
        ]);
    }
    public function createpost(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required:exists:categories,id',
            'tags' => 'required',
            'heroImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $heroImage = $request->file('heroImage');
        $ext = $heroImage->getClientOriginalExtension();
        $heroImage->storeAs('public/posts', Str::slug($request->input('title')) . '.' . $ext);


        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = Str::slug($request->input('title'));
        $post->body = $request->input('body');
        $post->image = Str::slug($request->input('title')) . '.' . $ext;
        $post->user_id = session('user')->id;
        $post->category_id = $request->input('category');
        $post->save();
        $post_tags = $request->input('tags');
        foreach ($post_tags as $tag) {
            if (is_numeric($tag)) {
                $post_tag = new Post_tag;
                $post_tag->post_id = $post->id;
                $post_tag->tag_id = $tag;
                $post_tag->save();
            } else {
                $tagd = new Tag;
                $tagd->name = $tag;
                $tagd->slug = Str::slug($tag);
                $tagd->save();

                $tags = Tag::where('slug', $tagd->slug)->first();
                $post_tag = new Post_tag;

                $post_tag->post_id = $post->id;
                $post_tag->tag_id = $tags->id;
                $post_tag->save();
            }
        }


        return redirect('/posts');
    }

    public function deletepost($id)
    {
        $post = Post::find($id);
        Storage::delete('public/posts/' . $post->image);
        $post->delete();
        Session::flash('success', 'Post Deleted!');
        return redirect('/posts');
    }

    public function publishpost($id)
    {
        $post = Post::find($id);
        $post->published_at = now();
        $post->save();
        Session::flash('success', 'Post Published!');
        return redirect('/posts');
    }
    public function unpublishpost($id)
    {
        $post = Post::find($id);
        $post->published_at = NULL;
        $post->save();
        Session::flash('success', 'Post Published!');
        return redirect('/posts');
    }
}
