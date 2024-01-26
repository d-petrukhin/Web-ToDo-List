@if($errors->any())
    <div class="alert alert-danger">
        <h1 class="h4">Oops, something went wrong!</h1>
        <ul class="list-group list-group-flush">
            @foreach($errors->all() as $error )
                <li class="list-group-item list-group-item-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif
