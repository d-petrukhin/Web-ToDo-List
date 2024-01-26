@extends('layouts.app')
@section('title', 'Edit task')
@section('content')
    @include('tasks.form', ['action' => route('tasks.update', $task), 'method' => 'PUT', 'btn' => 'Edit task', 'title' => 'Your old information: '.$task->title, 'description' => 'Your old information: '.$task->description])
@endsection
