@if(Auth::check())
    <div class="dropdown">
        <button type="button" class="btn btn-dark dropdown-toggle" data-bs-toggle="dropdown"
                aria-expanded="false" data-bs-offset="0,15">
            {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('profile.show', Auth::user()->id) }}">Profile</a></li>
            <li><a class="dropdown-item" href="{{ route('settings', Auth::user()->id) }}">Settings</a></li>
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
    <x-buttons.signin-button />
    <x-buttons.signup-button />
@endif
