@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="col-12 text-center mb-4 p-4">
            Project List
        </h1>
        <table class="table table-light table-hover table-striped-columns col-8">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Programming Languages</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>

            @foreach ($projects as $project)
                <tbody>
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->prog_langs }}</td>
                        <td>
                            <a href="{{Route('admin.projects.show', $project)}}" class="btn btn-primary btn-sm">Show</a>
                            <a href="{{Route('admin.projects.edit', $project)}}" class="btn btn-light btn-sm">Edit</a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        {{ $projects->links()}}
    </div>
</div>
@endsection
