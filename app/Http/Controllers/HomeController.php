<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('f/home', [
            'title' => 'Home',
            'posts' => Post::with(['author', 'category'])->orderBy('published_at', 'desc')->orderBy('id', 'desc')->paginate(9),
            'categories' => Category::with(['posts' => function ($query) {
                return $query->orderBy('published_at', 'desc')->limit(9);
            }])->get(),
        ]);
    }

    public function read($slug)
    {
        $post = Post::with(['author', 'category'])->where('slug', $slug)->firstOrFail();
        $recentPost = Post::orderBy('published_at', 'desc')->orderBy('id', 'desc')->take(5)->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('f/read', [
            'title' => $post->title,
            'post' => $post,
            'recentPost' => $recentPost,
            'categories' => $categories,
        ]);
    }
}
