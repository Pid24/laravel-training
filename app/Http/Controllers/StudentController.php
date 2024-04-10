<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() {
        // $student = Student::all();
        // return view('student', ['studentList' => $student]);

        // Query Builder
        // $student = DB::table('students')->get();
        // DB::table('students')->insert([
        //     'name' => 'Jefri Nichol',
        //     'gender' => 'L',
        //     'nis' => '1152000001',
        //     'class_id' => 1
        // ]);
        // DB::table('students')->where('id', 26)->update([
        //     'name' => 'Adipati Dolken'
        // ]);
        // DB::table('students')->where('id', 26)->delete();

        // Eloquent
        // $student = Student::all();
        // Student::create([
        //     'name' => 'Anatasia Kosasih',
        //     'gender' => 'p',
        //     'nis' => '1152000004',
        //     'class_id' => 2
        // ]);
        // Student::find(27)->update([
        //     'name' => 'Astrid Qanitah Arioputri',
        //     'nis' => '1152000043'
        // ]);
        Student::find(27)->delete();
    }
}
