@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="col-12 text-center mb-4 p-4">
            Project List
        </h1>
        <table class="table table-info table-striped-columns">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Programming Languages</th>
                    <th scope="col">Project URL</th>
                </tr>
            </thead>

            @foreach ($projects as $project)
            <tbody>
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->prog_langs }}</td>
                    <td>{{ $project->url }}</td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
</div>
@endsection
