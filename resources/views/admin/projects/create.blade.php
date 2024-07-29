@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <form action="{{Route('admin.projects.store') }}" method="POST">
                @method("POST")
                @csrf

                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="prog_langs">Progamming languages used:</label>
                    <input type="text" name="prog_langs" id="prog_langs" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="due_to">Due to:</label>
                    <input type="date" name="due_to" id="due_to" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="url">Image URL: </label>
                    <input type="text" name="url" id="url" class="form-control">
                </div>

                <input type="submit" value="Add project" class="btn btn-primary me-2">
                <input type="reset" value="Reset" class="btn btn-warning">
            </form>
        </div>
    </div>
</div>
@endsection
