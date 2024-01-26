@if(Auth::check())
    <div class="dropdown">
        <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false" data-bs-offset="0,15">
            {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('profile.show', Auth::user()) }}">Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('settings', Auth::user()) }}">Settings</a></li>
            <li>
                <hr class="dropdown-divider">
            </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <li>
                    <button class="dropdown-item" type="submit">Log out</button>
                </li>
            </form>
        </ul>
    </div>
@else
    <a href="{{ route('login') }}" type="button" class="btn btn-dark me-2">Sign in</a>
    <a href="{{ route('register') }}" type="button" class="btn btn-dark">Sign up</a>
@endif
