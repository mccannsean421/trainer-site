<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogPostsController;
use App\Models\BlogPost;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'store']);

Route::get('/register', function () {
    return view('get-started');
});

Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy']);

Route::get('/profile', function() {
    $user = Auth::user(); 
    return view('profile', ['user' => $user]);
})->middleware('auth');


Route::get('/blog', function() {
    return view('blog/home', ['posts' => BlogPost::all()]);
});

// Only available to admin
Route::get('/blog/create', function() {
    return view('blog/create');
})->middleware('auth');;

Route::post('/blog/create', [BlogPostsController::class, 'store'])->middleware('auth');;


