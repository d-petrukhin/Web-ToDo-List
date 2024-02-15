@extends('layouts.app')
@section('title', 'Edit task')
@section('content')
    @include('tasks.form', [
    'action' => route('tasks.update', $task),
    'method' => 'PUT',
    'btn' => 'Edit task',
    'title' => $task->title,
    'description' => $task->description,
    'additionalContent' => view('components.inputs.fields-form-edit', compact('task'))])
@endsection
