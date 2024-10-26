<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title'=>'Homepage']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Fawwas Sabil', 'title'=>'About']);
});

Route::get('/posts', function () {
    return view('posts', [
        'title' => 'Blog Page',
        'posts' => [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Fawwas Sabil',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem minus tenetur aut est error ducimus nulla quo iure odit, amet animi? Quae, sunt recusandae quis voluptatem libero autem neque iusto.'
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Fawwas Sabil',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat vel vitae reiciendis pariatur, et tempora? Iusto architecto quaerat deleniti, dolorum molestiae placeat, harum adipisci minima, voluptate reiciendis ullam obcaecati blanditiis?'
            ]
        ]
    ]);
});

route::get('/posts/{slug}', function($slug){
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Fawwas Sabil',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem minus tenetur aut est error ducimus nulla quo iure odit, amet animi? Quae, sunt recusandae quis voluptatem libero autem neque iusto.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Fawwas Sabil',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat vel vitae reiciendis pariatur, et tempora? Iusto architecto quaerat deleniti, dolorum molestiae placeat, harum adipisci minima, voluptate reiciendis ullam obcaecati blanditiis?'
        ]
    ];

    $post = Arr::first($posts, function($post) use ($slug){
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=>'Contacts']);
});
