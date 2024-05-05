<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StudentCreateRequest;

class StudentController extends Controller
{
    public function index() {
        $student = Student::paginate(15);
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

    public function store(StudentCreateRequest $request) {
        $student = Student::create($request->all());

        if($student) {
            Session::flash('status', 'success');
            Session::flash('message', 'add new student success!');
        }

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

    public function delete($id) {
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' => $student]);
    }

    public function destroy($id) {
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent->delete();

        if($deletedStudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'delete student success!');
        }

        return redirect('/students');
    }

    public function deletedStudent() {
        $deletedStudent = Student::onlyTrashed()->get();
        return view('student-deleted-list', ['student' => $deletedStudent]);
    }

    public function restore($id) {
        $deletedStudent = Student::withTrashed()->where('id', $id)->restore();

        if($deletedStudent) {
            Session::flash('status', 'success');
            Session::flash('message', 'restore student success!');
        }

        return redirect('/students');
    }
}
