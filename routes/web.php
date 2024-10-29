<?php

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('home', ['title'=>'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fawwas Sabil', 'title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog page', 'posts' => Post::all()]);
});

route::get('/posts/{post:slug}', function(Post $post){
    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

route::get('/authors/{user}', function(User $user){
    return view('posts', ['title' => 'Articles By ' . $user->name, 'posts' => $user->posts]);
});

Route::get('/contact', function () {    
    return view('contact', ['title'=>'Contacts']);
});
