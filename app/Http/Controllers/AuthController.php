<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        } else {
            return view('b.login');
        }
    }
    public function actionlogin(Request $request)
    {
        $request->validate([
            'signInEmail' => 'required|email|exists:users,email',
            'signInPassword' => 'required',
        ]);

        $data = [
            'email' => $request->input('signInEmail'),
            'password' => $request->input('signInPassword'),
        ];

        if (Auth::Attempt($data)) {
            $user = User::where('email', $request->input('signInEmail'))->first();
            session(['user' => $user]);
            return redirect('/dashboard');
        } else {
            Session::flash('danger', 'Wrong Password');
            return redirect('/login');
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login');
    }
    public function colorize(Request $request)
    {
        $color = $request->input('color');
        Cookie::forget('color');
        Cookie::queue('color', $color, 60 * 24 * 30 * 12); // 12 months
        return back();
    }
}
