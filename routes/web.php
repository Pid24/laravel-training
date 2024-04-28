<?php

use App\Models\Extracurricular;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\ExtracurricularController;

Route::get('/', function () {
    return view('home', [
        'name' => 'Pid',
        'role' => 'Admin',
        'buah' => ['Jeruk', 'Mangga', 'Apel', 'Anggur']
    ]);
});

Route::get('/students',[StudentController::class, 'index']);
Route::get('/class',[ClassController::class, 'index']);
Route::get('/extracurricular',[ExtracurricularController::class, 'index']);
Route::get('/teacher',[TeacherController::class, 'index']);
