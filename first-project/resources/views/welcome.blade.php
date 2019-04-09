@extends('layouts.app')

@section('body')


    <h1>Here we go !!!</h1>

    <ul style="text-align: left; width: 50%; margin: auto;">
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    </ul>
@endsection
