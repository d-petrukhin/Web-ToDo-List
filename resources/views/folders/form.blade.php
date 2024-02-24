<div class="container d-flex align-items-center justify-content-center col-md- col-lg-8" style="height: 60vh;">
    <form method="POST" action="{{ $action }}" class="needs-validation border rounded p-4 w-50" novalidate=""
          enctype="multipart/form-data">
        @method($method)
        @csrf
        <h1 class="h3 mb-3 fw-normal">{{ $btn }}</h1>
        <div class="row g-3">
            <div class="col-12">
                <label for="title" class="form-label">Folder name <abbr class="text-danger">*</abbr></label>
                <div class="input-group has-validation">
                    <input type="text" class="form-control" name="title" id="title" placeholder="Title" required=""
                           value="{{ $title }}">
                </div>
            </div>
            <div class="col-12">
                <label for="exampleColorInput" class="form-label">The color palette</label>
                <input type="color" class="m-auto form-control form-control-color" id="exampleColorInput" value="{{ $color }}" name="color" title="Choose your color">
            </div>
            <hr class="my-4">
            <p><abbr class="text-danger">*</abbr> - Required input fields</p>
            <button class="w-100 btn btn-outline-light btn-lg" type="submit">{{ $btn }}</button>
            @include('layouts.error')
        </div>
    </form>
</div>

