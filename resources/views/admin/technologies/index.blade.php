@extends('layouts.admin')

@section('content')
    <div class="col-10">


        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Numero di progetti</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <td>{{ $technology->id }}</td>
                        <td>{{ $technology->name }}</td>
                        <td>{{ $technology->slug }}</td>
                        <td>{{ count($technology->projects) }}</td>
                        <td class="d-flex align-items-center">
                            <a class="btn rounded-pill btn-primary me-2" href="{{route('admin.technologies.show', $technology->slug)}}">VEDI</a>
                            <a href="{{route('admin.technologies.edit', $technology->slug)}}" class="btn rounded-pill btn-warning me-2">MODIFICA</a>
                            <form action="{{route('admin.technologies.destroy', ['technology' => $technology->slug])}}" method="POST">
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
