@section('additionalContent')
    <div class="col-12">
        <input type="checkbox" class="form-check-input" id="completed" value="1" name="completed" {{ $task->completed ? 'checked' : '' }}>
        <label class="form-check-label" for="completed">Completed task</label>
    </div>
@endsection
