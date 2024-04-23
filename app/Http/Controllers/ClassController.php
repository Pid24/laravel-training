<?php

namespace App\Http\Controllers;

use App\Models\ClassRoom;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index() {

        // Lazy Load
        // $class = ClassRoom::all();

        // Eager Load
        $class = ClassRoom::with('students')->get();
        return view('classroom', ['classList' => $class]);
    }
}
