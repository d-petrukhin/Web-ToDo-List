@extends('layouts.app')
@section('title', 'Profile')
@section('content')
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4 text-center">
                        <img src="{{ asset($user->avatar) }}" class="img-fluid rounded" alt="Profile Image">
                    </div>
                    <div class="col-md-8">
                        <h2 class="card-title">Profile</h2>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Username:</strong> {{ $user->name }}</li>
                            <li class="list-group-item"><strong>First name:</strong> {{ $user->first_name ? : 'NULL'  }}</li>
                            <li class="list-group-item"><strong>Last name:</strong> {{ $user->last_name ? : 'NULL'  }}</li>
                            <li class="list-group-item"><strong>Middle
                                    name:</strong> {{ $user->middle_name ? : 'NULL' }}</li>
                            <li class="list-group-item"><strong>Birthday:</strong> {{ $user->birthday ? : 'NULL'  }}</li>
                            <li class="list-group-item"><strong>Count completed tasks:</strong> {{ $completedTasks }}
                            </li>
                            <li class="list-group-item"><strong>Count total tasks:</strong> {{ $totalTasks }}</li>
                            <li class="list-group-item"><strong>Created at:</strong> {{ $formattedCreatedAt }}</li>
                        </ul>
                        <a href="{{ route('profile.edit', $user) }}" class="btn btn-outline-light mt-3">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
