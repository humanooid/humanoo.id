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
        ]);
        $post = new Post;
        $post->title = $request->input('title');
        $post->slug = Str::slug($request->input('title'));
        $post->body = $request->input('body');
        $post->image = "f/images/blog/1.svg";
        $post->user_id = session('user')->id;
        $post->category_id = $request->input('category');
        $post->save();
        $post_tags = $request->input('tags');
        foreach ($post_tags as $tag) {
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


        return redirect('/posts');
    }
}
