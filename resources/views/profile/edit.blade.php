@extends('layouts.app')
@section('title', 'Edit Profile')
@section('content')
    <div class="container d-flex align-items-center justify-content-center col-md- col-lg-8" style="height: 60vh;">
        <form method="POST" action="{{ route('profile.update', $user) }}" class="needs-validation border rounded p-4" novalidate="" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <h1 class="h3 mb-3 fw-normal">Edit Profile</h1>
            <div class="row g-3">
                <div class="col-6">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                        <span class="input-group-text">@</span>
                        <input type="text" class="form-control" name="name" id="username" placeholder="Username" required=""
                               value="{{ old('name', $user->name) }}">
                    </div>
                </div>
                <div class="col-6">
                    <label for="floatingInput" class="form-label">Birthday</label>
                    <input type="date" id="floatingInput" class="form-control" name="birthday"
                           value="{{ old('birthday', $user->birthday) }}">
                </div>
                <div class="col-sm-4">
                    <label for="firstName" class="form-label">First name</label>
                    <input type="text" class="form-control" id="firstName" placeholder=""
                           value="{{ old('first_name', $user->first_name) }}" required="" name="first_name">
                </div>
                <div class="col-sm-4">
                    <label for="lastName" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="lastName" placeholder=""
                           value="{{ old('last_name', $user->last_name) }}" required="" name="last_name">
                </div>
                <div class="col-sm-4">
                    <label for="middleName" class="form-label">Middle name</label>
                    <input type="text" class="form-control" id="middleName" placeholder=""
                           value="{{ old('middle_name', $user->middle_name) }}" required="" name="middle_name">
                </div>

                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com"
                           value="{{ old('email', $user->email) }}" name="email">
                </div>
                <div class="col-12">
                    <label for="avatar" class="form-label">Avatar <span class="text-body-secondary">(By the standard, your avatar is my cat)</span></label>
                    <input type="file" class="form-control" aria-label="Large file input example" value="{{ old('avatar', $user->avatar) }}" name="avatar">
                </div>
                <hr class="my-4">
                <button class="w-100 btn btn-outline-light btn-lg" type="submit">Edit profile</button>
            </div>
        </form>
    </div>
@endsection
