@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">

            <h1>
                {{ $project->title }}
            </h1>
            <h2>{{ $project->id }}</h2>
            <h3>{{ $project->prog_langs }}</h3>
            <h4>{{ $project->due_to }}</h4>
            <h4>{{ $project->url }}</h4>

        </div>
    </div>
</div>
@endsection
