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

        $nilai = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

        // $nilaiKaliDua = [];
        // foreach ($nilai as $value) {
        //     array_push($nilaiKaliDua, $value * 2);
        // }

        $aaa = collect($nilai)->map(function ($value) {
            return $value * 2;
        })->all();

        dd($aaa);
    }
}
