@extends('layouts.app')
@section('title', 'Sign up')
@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="height: 60vh;">
        <form method="POST" action="{{route('register')}}" class="w-25 m-auto col-md-6 border rounded p-4">
            @csrf
            @method('POST')
            <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
            <div class="form-floating mb-1">
                <input type="text" name="name" class="form-control" id="floatingInput" placeholder="Name">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-1">
                <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-1">
                <input type="password" name="password" class="form-control" id="floatingPassword"
                       placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
            <div class="form-floating mb-3">
                <input type="password" name="password_confirmation" class="form-control" id="floatingPassword"
                       placeholder="Password">
                <label for="floatingPassword">Confirm password</label>
            </div>
            <button class="btn btn-outline-light w-100 py-2" type="submit">Sign up</button>
            <p class="mt-3 mb-3 text-body-secondary">Already have an account? <a href="{{ route('login') }}"
                                                                                 class="link-underline-light link-light">Sign
                    in</a></p>
            @include('layouts.error')
        </form>
    </div>
@endsection

