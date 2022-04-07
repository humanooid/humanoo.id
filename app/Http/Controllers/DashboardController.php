<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Post;
use App\Models\Category;
use App\Models\Post_tag;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DashboardController extends Controller
{
    public function __construct()
    {
        // Debugbar::info($object);
        // Debugbar::error('Error!');
        // Debugbar::warning('Watch out…');
        Debugbar::addMessage('Cookie set for 12 months', 'Colorize');
    }

    public function index()
    {
        return view('b.dashboard', [
            'title' => 'Dashboard',
        ]);
    }

    public function posts()
    {
        $search = request('search');
        $post = Post::with(['author', 'category']);
        if ($search) {

            $post = $post->where('title', 'like', "%$search%");
            $category = Category::where('name', 'like', "%$search%")->first();
            if ($category) {
                $post = $post->orWhere('category_id', $category->id);
            }
        }
        $post = $post->orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate(10);
        return view('b.posts', [
            'title' => 'Posts',
            'posts' => $post,
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
            'title' => 'required|unique:posts,title',
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
        if ($request->input('publish')) {
            $post->published_at = now();
        }
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
        if ($request->input('publish')) {
            $notif = 'Post Created and Published!';
        } else {
            $notif = 'Post Created!';
        }
        Session::flash('success', $notif);

        return redirect('/posts');
    }

    public function editapost($id)
    {
        $post = Post::with(['author', 'category', 'post_tag.tag'])->find($id);
        $categories = Category::all();
        $tags = Tag::all();
        // dd($post->post_tag->pluck('tag')->toArray()[0]['name']);
        return view('b.makeapost', [
            'title' => 'Edit a Post',
            'post' => $post,
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    public function updatepost(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required:exists:categories,id',
            'tags' => 'required',
            'heroImage' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->slug = Str::slug($request->input('title'));
        $post->body = $request->input('body');
        $post->category_id = $request->input('category');
        if ($request->input('publish')) {
            $post->published_at = now();
        } else {
            $post->published_at = null;
        }
        if ($request->hasFile('heroImage')) {
            Storage::delete('public/posts/' . $post->image);
            $heroImage = $request->file('heroImage');
            $ext = $heroImage->getClientOriginalExtension();
            $heroImage->storeAs('public/posts', Str::slug($request->input('title')) . '.' . $ext);
            $post->image = Str::slug($request->input('title')) . '.' . $ext;
        }
        $post->save();
        $post_tags_data = Post_tag::where('post_id', $post->id)->get();
        foreach ($post_tags_data as $post_tag) {
            $post_tag->delete();
        }
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
        if ($request->input('publish')) {
            $notif = 'Post Updated and Published!';
        } else {
            $notif = 'Post Updated!';
        }
        Session::flash('success', $notif);
        return redirect('/posts');
    }

    public function deletepost($id)
    {
        $post = Post::find($id);
        Storage::delete('public/posts/' . $post->image);
        $post->delete();

        $postTag = Post_tag::where('post_id', $id)->get();
        foreach ($postTag as $tag) {
            $tag->delete();
        }

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
