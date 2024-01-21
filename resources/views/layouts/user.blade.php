@if(Auth::check())
    <div class="dropdown">
        <button type="button" class="btn btn-outline-light dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false" data-bs-offset="0,15">
            {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li><button class="dropdown-item" type="submit">Log out</button></li>
            </form>
        </ul>
    </div>
@else
    <a href="{{ route('login') }}" type="button" class="btn btn-outline-light me-2">Sign in</a>
    <a href="{{ route('register') }}" type="button" class="btn btn-outline-light">Sign up</a>
@endif
