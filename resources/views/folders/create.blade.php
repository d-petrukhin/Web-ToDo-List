@extends('layouts.app')
@section('title', 'Create folder')
@section('content')
    @include('folders.form', [
    'action' => route('folders.store'),
    'method' => 'POST',
    'btn' => 'Create folder',
    'title' => '',
    'color' => '#563d7c'])
@endsection
