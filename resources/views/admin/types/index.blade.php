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
                @foreach ($types as $type)
                    <tr>
                        <td>{{ $type->id }}</td>
                        <td>{{ $type->name }}</td>
                        <td>{{ $type->slug }}</td>
                        <td>{{ count($type->projects) }}</td>
                        <td class="d-flex align-items-center">
                            <a class="btn rounded-pill btn-primary me-2" href="{{route('admin.types.show', $type->slug)}}">VEDI</a>
                            <a href="{{route('admin.types.edit', $type->slug)}}" class="btn rounded-pill btn-warning me-2">MODIFICA</a>
                            <form action="{{route('admin.types.destroy', ['type' => $type->slug])}}" method="POST">
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
