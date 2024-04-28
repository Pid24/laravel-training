@extends('layouts.mainlayout')

@section('title', 'Class')

@section('content')
    <h1>Ini halaman class</h1>
    <h3>Class List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Students</th>
                <th>Homeroom Teacher</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->students as $student)
                            {{ $student['name'] }} <br>
                        @endforeach
                    </td>
                    <td>{{ $data->homeroomTeacher->name }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
