<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'name' => 'Pid',
        'role' => 'Admin',
        'buah' => ['Jeruk', 'Mangga', 'Apel', 'Anggur']
    ]);
});

Route::get('/students',[StudentController::class, 'index']);
