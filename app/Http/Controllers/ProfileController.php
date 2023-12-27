<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class ProfileController extends Controller
{
    public function index() {
        return view('f.profile', [
            'title' => 'Home',
            'bar' => getBar('Home'),
            'posts' => Post::with(['author', 'category', 'post_tag'])->where('published_at', '!=', NULL)->orderBy('published_at', 'desc')->orderBy('id', 'desc')->paginate(9),
            'categories' => Category::with(['posts' => function ($query) {
                return $query->orderBy('published_at', 'desc')->limit(9);
            }])->get(),
        ]);
    }
}
