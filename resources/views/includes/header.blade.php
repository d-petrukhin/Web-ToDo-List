<div class="container">
    <header
        class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap">
                </svg>
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('home') }}" class="nav-link px-2 link-secondary text-white">Home</a></li>
            <li><a href="{{ route('tasks.create') }}" class="nav-link px-2 link-secondary text-white">Create task</a>
            </li>
            <li><a href="{{ route('tasks.index') }}" class="nav-link px-2 link-secondary text-white">Show tasks</a></li>
            <li><a href="{{ route('about') }}" class="nav-link px-2 link-secondary text-white">About</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <x-user-dropdown />
        </div>
    </header>
</div>
