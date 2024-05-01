<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index() {
        $student = Student::get();
        return view('student', ['studentList' => $student]);

    }

    public function show($id) {
        $student = Student::with(['class.homeroomteacher', 'extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
    }

    public function create() {
        $class = ClassRoom::select('id', 'name')->get();
        return view('student-add', ['class' => $class]);
    }

    public function store(Request $request) {
        $student = Student::create($request->all());
        return redirect('/students');
    }

    public function edit(Request $request, $id) {
        $student = Student::with('class')->findOrFail($id);
        $class = ClassRoom::where('id', '!=', $student->class_id)->get(['id', 'name']);
        return view('student-edit', ['student' => $student, 'class' => $class]);
    }

    public function update(Request $request, $id) {
        $student = Student::findOrFail($id);

        $student->update($request->all());
        return redirect('/students');
    }
}
