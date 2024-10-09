@extends('layouts.app')

@section('title', 'Tasks')

@section('header', 'To-Do App для команд')

@section('content')

    <div class="tasks-container">
        <h2>Список задач</h2>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="{{ route('tasks.show', $task['id']) }}">{{ $task['title'] }}</a>
                </li>
            @endforeach
        </ul>
    </div>
@endsection