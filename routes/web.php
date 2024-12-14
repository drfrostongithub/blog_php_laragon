<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Sandhika Galih', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Putra Reza',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem quae
                    voluptates aspernatur nesciunt
                    cum sequi provident, similique repellat nisi deserunt ea eveniet qui? Saepe quod ipsam enim cumque
                    placeat praesentium!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Putra Reza',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem quae
                    voluptates aspernatur nesciunt
                    cum sequi provident, similique repellat nisi deserunt ea eveniet qui? Saepe quod ipsam enim cumque
                    placeat praesentium nesciunt
                    cum sequi provident, similique repellat nisi deserunt ea eveniet qui? Saepe quod ipsam enim cumque
                    placeat praesentium!'
        ]
    ]]);
});

Route::get('/posts/{id}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'title' => 'Judul Artikel 1',
            'slug' => 'judul-artikel-1',
            'author' => 'Putra Reza',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem quae
                    voluptates aspernatur nesciunt
                    cum sequi provident, similique repellat nisi deserunt ea eveniet qui? Saepe quod ipsam enim cumque
                    placeat praesentium!'
        ],
        [
            'id' => 2,
            'title' => 'Judul Artikel 2',
            'slug' => 'judul-artikel-2',
            'author' => 'Putra Reza',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem quae
                    voluptates aspernatur nesciunt
                    cum sequi provident, similique repellat nisi deserunt ea eveniet qui? Saepe quod ipsam enim cumque
                    placeat praesentium nesciunt
                    cum sequi provident, similique repellat nisi deserunt ea eveniet qui? Saepe quod ipsam enim cumque
                    placeat praesentium!'
        ]
    ];

    $post = Arr::first($posts, function ($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    // dd($post);
    return view('post', ['title' => 'Complete Post', 'post' => $post]);
});

Route::get('/contact', fn() => view('contact', [
    'email' => 'contact@mail.com',
    'instagram' => 'Instagram',
    'facebook' => 'Facebook'
], ['title' => 'Contact']));
