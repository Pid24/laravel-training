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
Route::get('/student/{id}',[StudentController::class, 'show']);
Route::get('/student-add',[StudentController::class, 'create']);
Route::post('/student', [StudentController::class, 'store']);
Route::get('/student-edit/{id}',[StudentController::class, 'edit']);
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::get('/student-delete/{id}', [StudentController::class, 'delete']);
Route::delete('/student-destroy/{id}', [StudentController::class, 'destroy']);

Route::get('/class',[ClassController::class, 'index']);
Route::get('/class-detail/{id}',[ClassController::class, 'show']);

Route::get('/extracurricular',[ExtracurricularController::class, 'index']);
Route::get('/extracurricular-detail/{id}',[ExtracurricularController::class, 'show']);

Route::get('/teacher',[TeacherController::class, 'index']);
Route::get('/teacher-detail/{id}',[TeacherController::class, 'show']);
