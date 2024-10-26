<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post{
    public static function all(){
        return [
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
    }

    public static function find($slug){

        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
        
        if(! $post){
            abort(404);
        }

        return $post;
    }

}
