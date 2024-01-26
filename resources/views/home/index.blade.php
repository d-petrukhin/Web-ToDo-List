@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <div class="p-5 text-center border rounded">
        <h1 class="text-body-emphasis">Welcome to task management website!</h1>
        <p class="col-lg-10 mx-auto fs-3 text-muted">
            Here, you can easily create, track, and manage your tasks in a convenient electronic format. Let's get
            started:
        </p>
        <div class="list-group text-start col-lg-9 mx-auto">
            <a class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-plus-lg"
                     viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                </svg>
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Create a task:</h6>
                        <p class="mb-0 opacity-75">Click the 'Create Task' button to add a new task to your list.</p>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-check2"
                     viewBox="0 0 16 16">
                    <path
                        d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
                </svg>
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Mark Completed Tasks:</h6>
                        <p class="mb-0 opacity-75">After completing a task, mark it as done to track your progress.</p>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                     class="bi bi-list-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M5 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3.854 2.146a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 3.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 1 1 .708-.708L2 7.293l1.146-1.147a.5.5 0 0 1 .708 0zm0 4a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0l-.5-.5a.5.5 0 0 1 .708-.708l.146.147 1.146-1.147a.5.5 0 0 1 .708 0z"/>
                </svg>
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Organize Lists:</h6>
                        <p class="mb-0 opacity-75">Create different task lists for more organized management of projects
                            or responsibilities.</p>
                    </div>
                </div>
            </a>
            <a class="list-group-item list-group-item-action d-flex gap-3 py-3" aria-current="true">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                     class="bi bi-graph-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                          d="M0 0h1v15h15v1H0V0Zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07Z"/>
                </svg>
                <div class="d-flex gap-2 w-100 justify-content-between">
                    <div>
                        <h6 class="mb-0">Personal Completion Percentage:</h6>
                        <p class="mb-0 opacity-75">See your personal task completion percentage to stay motivated.</p>
                    </div>
                </div>
            </a>
        </div>
        <p class="col-lg-10 mx-auto fs-4 text-muted pt-3">
            <code>"Embarking on the journey of task writing is already halfway to accomplishment. Putting your goals
                into words is the first step towards bringing them to life."</code>
        </p>
    </div>
@endsection
