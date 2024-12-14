<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Sandhika Galih'], ['title' => 'Blog']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog']);
});

Route::get('/contact', fn() => view('contact', [
    'email' => 'contact@mail.com',
    'instagram' => 'Instagram',
    'facebook' => 'Facebook'
], ['title' => 'Contact']));
