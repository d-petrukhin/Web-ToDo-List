@extends('layouts.app')
@section('title', 'Settings')
@section('content')
    <div class="container d-flex align-items-center justify-content-center col-md- col-lg-8" style="height: 60vh;">
        <form method="POST" action="{{ route('profile.destroy', $user) }}" class="needs-validation border rounded p-4"
              novalidate="" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h1 class="h3 mb-3 fw-normal">Settings</h1>
            <hr class="my-4">
            <div class="row g-4">
                <div class="col-6">
                    <a href="{{ route('profile.edit', $user) }}" type="button" class="btn btn-outline-light">Edit
                        profile</a>
                </div>
                <div class="col-6">
                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Delete profile
                    </button>
                    <x-components.modal.modal-window />
                </div>
                <hr class="my-4">
            </div>
        </form>
        @include('layouts.error')
    </div>
@endsection
