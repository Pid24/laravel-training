@extends('layouts.mainlayout')

@section('title', 'Teachers')

@section('content')

    <h2>
        Anda sedang melihat data detail dari teacher yang bernama {{ $teacher->name }}</h2>

    <div class="mt-5">
        <h3>
            Class :
            @if ($teacher->class)
                {{ $teacher->class->name }}
            @endif
            -
        </h3>
    </div>

    <div class="mt-5">
        <h4>List Student</h4>
        @if ($teacher->class)
            <ol>
                @foreach ($teacher->class->students as $item)
                    <li>{{ $item->name }}</li>
                @endforeach
            </ol>
        @endif
    </div>

@endsection
