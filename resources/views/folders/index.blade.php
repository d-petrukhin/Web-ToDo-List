@extends('layouts.app')
@section('title', 'Tasks')
@section('content')
    <div class="p-5 text-center border rounded">
        <h1 class="text-body-emphasis">Folders</h1>
        <div class="list-group text-start col-lg-10 mx-auto">
            <h6 class="pb-2 mb-0">Your folders:</h6>
            @foreach($folders as $folder)
                <div class="list-group row">
                    <ul class="list-group-item d-flex gap-2" >
                        <div class="col-10">
                            <a href="{{ route('folders.show', $folder) }}" class="link-offset-1 link-underline link-underline-opacity-0 list-group w-75", style="color: {{ $folder->color }}">
                                {{ $folder->title }}
                                <small class="d-block text-body-secondary">Total tasks in folder: {{ $getTotalTasksInFolder[$folder->id] }}</small></a>
                        </div>
                        <div class="col-auto">
                            <a href="{{ route('folders.edit', $folder->id) }}" type="button" class="btn btn-outline-primary">Edit</a>
                        </div>
                        <div class="col-auto">
                            <form method="POST" action="{{ route('folders.destroy', $folder) }}" class="d-flex">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </ul>
                </div>
            @endforeach
            @include('layouts.paginate', ['param' => $folders])
        </div>
@endsection
