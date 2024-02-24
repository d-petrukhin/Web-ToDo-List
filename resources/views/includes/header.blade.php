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
            <li class="nav-item dropdown">
                <a type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                        aria-expanded="false" data-bs-offset="0,15" style="color:#ffffff">
                    Create
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('folders.create') }}">Create folder</a></li>
                    <li><a class="dropdown-item" href="{{ route('tasks.create') }}">Crate task</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a type="button" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" role="button"
                   aria-expanded="false" data-bs-offset="0,15" style="color:#ffffff">
                    Show
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('folders.index') }}">Show folders</a></li>
                    <li><a class="dropdown-item" href="{{ route('tasks.index') }}">Show tasks</a></li>
                </ul>
            </li>
            <li><a href="{{ route('about') }}" class="nav-link px-2 link-secondary text-white">About</a></li>
        </ul>
        <div class="col-md-3 text-end">
            <x-dropdown.user-dropdown />
        </div>
    </header>
</div>
