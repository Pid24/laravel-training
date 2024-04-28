@extends('layouts.mainlayout')

@section('title', 'Extracurricular')

@section('content')
    <h1>Ini halaman extracurricular</h1>
    <h3>Extracurricular List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Member</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ekskulList as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>
                        @foreach ($data->students as $item)
                            {{ $item->name }} <br>
                        @endforeach
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
