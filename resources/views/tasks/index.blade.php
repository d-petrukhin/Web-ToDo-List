@extends('layouts.app')
@section('title', 'Tasks')
@section('content')
    <div class="p-5 text-center border rounded">
        <h1 class="text-body-emphasis">Tasks</h1>
        <div class="list-group text-start col-lg-9 mx-auto">
            <h6 class="pb-2 mb-0">Your tasks:</h6>
            @foreach($tasks as $task)
                <div class="list-group">
                    <ul class="list-group-item d-flex gap-2">
                            <input class="form-check-input me-1" type="checkbox" value="1" name="completed" id="firstCheckbox" {{ $task->completed ? 'checked' : '' }} ">
                        <a href="{{ route('tasks.show', $task) }}"
                           class="link-offset-1 link-underline link-underline-opacity-0 list-group w-75">
                        <span>
        {{ $task->title }}
        <small class="d-block text-body-secondary">{{ $task->description }}</small>
      </span></a>
                        <form method="POST" action="{{ route('tasks.destroy', $task) }}" class="d-flex">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="position-absolute top-0 end-0 p-2 m-3 btn-close bg-opacity-10"
                                    aria-label="Close"></button>
                        </form>
                    </ul>
                </div>
            @endforeach
            @include('layouts.paginate')
        </div>
@endsection
