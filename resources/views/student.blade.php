@extends('layouts.mainlayout')

@section('title', 'Students')

@section('content')
    <h1>Ini halaman students</h1>

    <div class="my-5">
        <a href="student-add" class="btn btn-primary">Add Data</a>
    </div>

    <h3>Student List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Nis</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($studentList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>
                    <td><a href="student/{{ $data->id }}">Detail</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
