<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function index()
    {
        return view('f.home', [
            'title' => 'Home',
            'bar' => getBar('Home'),
            'posts' => Post::with(['author', 'category', 'post_tag'])->where('published_at', '!=', NULL)->orderBy('published_at', 'desc')->orderBy('id', 'desc')->paginate(9),
            'categories' => Category::with(['posts' => function ($query) {
                return $query->orderBy('published_at', 'desc')->limit(9);
            }])->get(),
        ]);
    }

    public function read($slug)
    {
        $post = Post::with(['author', 'category', 'post_tag.tag'])->where('slug', $slug)->where('published_at', '!=', NULL)->firstOrFail();
        $recentPost = Post::orderBy('published_at', 'desc')->orderBy('id', 'desc')->take(5)->get();
        $categories = Category::orderBy('name', 'asc')->get();
        return view('f.read', [
            'title' => $post->title,
            'bar' => getBar('Post'),
            'post' => $post,
            'recentPost' => $recentPost,
            'categories' => $categories,
        ]);
    }

    public function changelayout($mode)
    {
        Cookie::forget('layout');
        Cookie::queue('layout', $mode);
        return back();
    }

    public function yama()
    {
        $user = User::where('email', 'maulana24@live.com')->firstOrFail();
        $posts = Post::with(['author', 'category', 'post_tag'])->where('published_at', '!=', NULL)->where('user_id', $user->id)->orderBy('published_at', 'desc')->orderBy('id', 'desc')->take(3)->get();
        return view('f.yama', [
            'title' => 'Yama',
            'posts' => $posts,
            'bar' => getBar('Yama'),
        ]);
    }

    public function marchites()
    {
        return view('f.marchites', [
            'title' => 'Gilang',
            'bar' => getBar('Gilang'),
        ]);
    }

    public function razor()
    {
        return view('f.razor', [
            'title' => 'Ilham',
            'bar' => getBar('Ilham'),
        ]);
    }
}
