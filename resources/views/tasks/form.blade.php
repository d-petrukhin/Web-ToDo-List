<div class="container d-flex align-items-center justify-content-center col-md- col-lg-8" style="height: 60vh;">
    <form method="POST" action="{{ $action }}" class="needs-validation border rounded p-4 w-50" novalidate=""
          enctype="multipart/form-data">
        @method($method)
        @csrf
        <h1 class="h3 mb-3 fw-normal">{{ $btn }}</h1>
        <div class="row g-3">
            <div class="col-12">
                <label for="username" class="form-label">Task name <abbr class="text-danger">*</abbr></label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="title" id="username" placeholder="Title" required=""
                           value="{{ $title }}">
                </div>
            </div>
            <div class="col-12">
                <label for="floatingInput" class="form-label">Task description <abbr class="text-danger">*</abbr></label>
                <textarea class="form-control" aria-label="With textarea" name="description"
                          placeholder="Description">{{ $description }}</textarea>
            </div>
            <div class="col-12">
                <label for="floatingInput" class="form-label">Select folder</label>
                <select class="form-select" aria-label="Select folder" name="folder_id">
                    <option selected value="{{ null }}">Select folder</option>
                    @foreach($folders as $folder)
                    <option value="{{ $folder->id }}">{{ $folder->title }}</option>
                    @endforeach
                </select>
            </div>
            @yield('additionalContent')
            <hr class="mt-4">
            <p><abbr class="text-danger">*</abbr> - Required input fields</p>
            <button class="w-100 btn btn-outline-light btn-lg" type="submit">{{ $btn }}</button>
            @include('layouts.error')
        </div>
    </form>
</div>

