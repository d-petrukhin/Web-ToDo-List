@extends('layouts.app')
@section('title', 'Edit folder')
@section('content')
    @include('folders.form', [
    'action' => route('folders.update', $folder),
    'method' => 'PUT',
    'btn' => 'Edit folder',
    'title' => $folder->title,
    'color' => $folder->color])
@endsection
