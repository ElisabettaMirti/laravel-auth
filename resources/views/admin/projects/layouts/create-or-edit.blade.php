@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <h2 class="mb-3">@yield('page-title')</h2>
            <form action="@yield('form-action')" method="POST">
                @yield('form-method')
                @csrf

                @if ($errors->any())
                    <div class="mb-3">
                        <ul class="alert alert-danger ps-4">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="mb-3">
                    <label for="title">Title:</label>
                    <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $project->title)}}">
                </div>

                <div class="mb-3">
                    <label for="prog_langs">Progamming languages used:</label>
                    <input type="text" name="prog_langs" id="prog_langs" class="form-control" value="{{ old('title', $project->prog_langs)}}">
                </div>

                <div class="mb-3">
                    <label for="due_to">Due to:</label>
                    <input type="date" name="due_to" id="due_to" class="form-control" value="{{ old('title', $project->due_to)}}">
                </div>

                <div class="mb-3">
                    <label for="url">Image URL: </label>
                    <input type="text" name="url" id="url" class="form-control" value="{{ old('title', $project->url)}}">
                </div>

                <input type="submit" value="@yield('page-title')" class="btn btn-primary me-2">
                <input type="reset" value="Reset" class="btn btn-warning">
            </form>
        </div>
    </div>
</div>
@endsection
