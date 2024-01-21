@extends('layouts.app')
@section('title', 'Create task')
@section('content')
    @include('tasks.form', ['action' => route('tasks.store'), 'method' => 'POST', 'btn' => 'Create task', 'title' => 'Title', 'description' => 'Description'])
@endsection
