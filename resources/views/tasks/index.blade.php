@extends('layouts.app')
@section('title', 'Tasks')
@section('content')
    <div class="p-5 text-center border rounded">
        <h1 class="text-body-emphasis">Tasks</h1>
        <div class="list-group text-start col-lg-10 mx-auto">
            <h6 class="pb-2 mb-0">Your tasks:</h6>
            @foreach($tasks as $task)
                <div class="list-group row">
                    <ul class="list-group-item d-flex gap-2" >
                        <div class="col">
                            <input class="form-check-input me-1" type="checkbox" value="1" name="completed"
                                   id="firstCheckbox" disabled {{ $task->completed ? 'checked' : '' }} ">
                        </div>
                        <div class="col-10">
                            <h6 class="link-offset-1 link-underline link-underline-opacity-0 list-group w-75">
                                {{ $task->title }}
                                <small class="d-block text-body-secondary">{{ $task->description }}</small></h6>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('tasks.show', $task) }}" type="button" class="btn btn-outline-primary">Edit</a>
                        </div>
                        <div class="col-auto">
                            <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="d-flex">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </ul>
                </div>
            @endforeach
            @include('layouts.paginate')
        </div>
@endsection
