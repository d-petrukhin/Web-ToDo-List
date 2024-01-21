@extends('layouts.app')
@section('title', 'Sign in')
@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="height: 60vh;">
        <form method="POST" action="{{ route('login') }}" class="w-25 m-auto col-md-6 border rounded p-4">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please Sign in</h1>
            <div class="form-floating mb-1">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword"
                       placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <button class="btn btn-outline-light w-100 py-2" type="submit">Sign in</button>
            <p class="mt-3 mb-3 text-body-secondary">Don't have an account? <a href="{{ route('register') }}"
                                                                               class="link-underline-light link-light">Sign
                    up</a></p>
            @include('layouts.error')
        </form>
    </div>
@endsection
