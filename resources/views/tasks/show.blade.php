@extends('layouts.app')
@section('title', 'Task')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center text-body-emphasis">Task Information</h1>
                <table class="table table-bordered mt-4">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Status Completed</th>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Created At</th>
                        <th scope="col">Updated At</th>
                        <th scope="col">Owner</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->completed ? 'Completed' : 'Not completed' }}</td>
                        <td>{{ $task->title }}</td>
                        <td>{{ $task->description }}</td>
                        <td>{{ $task->created_at }}</td>
                        <td>{{ $task->updated_at }}</td>
                        <td>{{ $task->user->name }}</td>
                    </tr>
                    </tbody>
                </table>
                <div class="row row-cols-auto">
                    <div class="col">
                        <a href="{{ route('tasks.edit', $task) }}" type="button" class="btn btn-outline-primary">Edit
                            task</a>
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
        </div>
@endsection
