@extends('layouts.app')
@section('title', 'Task')
@section('content')
    <div class="p-5 text-center border rounded">
        <h1 class="text-body-emphasis">Task information</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">status completed</th>
                <th scope="col">title</th>
                <th scope="col">description</th>
                <th scope="col">created at</th>
                <th scope="col">updated at</th>
                <th scope="col">user</th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <tr>
                <th scope="row">{{ $task->id }}</th>
                <th scope="row">{{ $task->completed ? 'true' : 'false' }}</th>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->created_at }}</td>
                <td>{{ $task->updated_at }}</td>
                <td>{{ Auth::user()->name }}</td>
            </tr>
        </table>
        <div class="row row-cols-auto">
            <div class="col">
                <a href="{{ route('tasks.edit', $task) }}" type="button" class="btn btn-outline-primary">Edit task</a>
            </div>
            <div class="col">
                <form method="POST" action="{{ route('tasks.destroy', $task) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-outline-danger">Destroy task</button>
                </form>
            </div>
        </div>
    </div>
@endsection
