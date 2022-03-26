<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
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
}
