<?php

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::post('/', [HomeController::class, 'store'])->name('home.store');
Route::post('/create', [HomeController::class, 'create'])->name('home.create');

Route::get('/read/{post:slug}', [HomeController::class, 'read']);
Route::get('/changelayout/{any}', [HomeController::class, 'changeLayout']);
Route::get('/yama', [HomeController::class, 'yama']);
Route::post('/notifYama', [HomeController::class, 'notifYama'])->name('notifYama');
Route::get('/testwa', [HomeController::class, 'testwa'])->name('testwa');
Route::get('/marchites', [HomeController::class, 'marchites']);
Route::get('/razor', [HomeController::class, 'razor']);


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/actionlogin', [AuthController::class, 'actionlogin'])->name('actionlogin');
Route::get('/actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::post('/colorize', [AuthController::class, 'colorize'])->middleware('auth');


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/posts', [DashboardController::class, 'posts'])->middleware('auth');
Route::get('/makeapost', [DashboardController::class, 'makeapost'])->middleware('auth');
Route::post('/createpost', [DashboardController::class, 'createpost'])->middleware('auth');
Route::get('/editapost/{post:id}', [DashboardController::class, 'editapost'])->middleware('auth');
Route::post('/updatepost/{post:id}', [DashboardController::class, 'updatepost'])->middleware('auth');
Route::get('/deletepost/{post:id}', [DashboardController::class, 'deletepost'])->middleware('auth');
Route::get('/publishpost/{post:id}', [DashboardController::class, 'publishpost'])->middleware('auth');
Route::get('/unpublishpost/{post:id}', [DashboardController::class, 'unpublishpost'])->middleware('auth');
Route::get('/meeting', [DashboardController::class, 'meeting'])->middleware('auth');


if(env('APP_ENV') === 'production') {
    URL::forceScheme('https');
}