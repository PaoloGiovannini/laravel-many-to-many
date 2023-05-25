@extends('layouts.admin')

@section('content')
<div class="col-10">



    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Tipologia</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->title }}</td>
                    <td>{{ $project->slug }}</td>
                    <td>{{$project->type?->name}}</td> 
                    <td class="d-flex align-items-center">
                        <a class="btn rounded-pill btn-primary me-2" href="{{route('admin.projects.show', $project->slug)}}">VEDI</a>
                        <a href="{{route('admin.projects.edit', $project->slug)}}" class="btn rounded-pill btn-warning me-2">MODIFICA</a>
                        <form action="{{route('admin.projects.destroy', ['project' => $project->slug])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn rounded-pill btn-danger">ELIMINA</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
@endsection
