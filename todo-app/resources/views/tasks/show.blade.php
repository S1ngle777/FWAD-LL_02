@extends('layouts.app')

@section('title', 'Просмотр задачи')

@section('content')
    <div class="tasks-container">
        <x-task :task="$task" />
    </div>
@endsection