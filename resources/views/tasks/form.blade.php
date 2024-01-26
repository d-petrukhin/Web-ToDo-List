<div class="d-flex align-items-center justify-content-center" style="height: 60vh;">
    <form method="POST" action="{{ $action }}" class="w-50 m-auto col-md-6 border rounded p-4">
        @method($method)
        @csrf
        <h1 class="h3 mb-3 fw-normal">{{ $btn }}</h1>
        <div class="form-floating mb-1">
            <input type="text" name="title" class="form-control" id="floatingInput" placeholder="{{ $title }}">
            <label for="floatingInput">{{ $title }}</label>
        </div>
        <div class="form-floating mb-3">
            <textarea name="description" class="form-control" placeholder="Description" id="floatingTextarea" style="height: 100px; max-height: 400px;
      resize: vertical;">{{ $description }}</textarea>
            <label for="floatingTextarea">{{ $description }}</label>
        </div>
        <button class="btn btn-outline-light w-100 py-2 mb-3" type="submit">{{ $btn }}</button>
        @include('layouts.error')
    </form>
</div>
