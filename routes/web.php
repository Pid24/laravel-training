<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Pid',
        'role' => 'Admin',
        'buah' => ['Jeruk', 'Mangga', 'Apel', 'Anggur']
    ]);
});

Route::get('/about', function () {
    return view('about');
});
