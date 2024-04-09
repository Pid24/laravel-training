<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('home', [
        'name' => 'Pid',
        'role' => 'Admin',
        'buah' => ['Jeruk', 'Mangga', 'Apel', 'Anggur']
    ]);
});

Route::get('/students',[StudentController::class, 'index']);
Route::get('/class',[ClassController::class, 'index']);
