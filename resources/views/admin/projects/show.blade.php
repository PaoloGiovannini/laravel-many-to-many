@extends('layouts.admin')

@section('content')
    <div class="col-10 ">
        <div class="card">
            <div class="card-body">
                
                <h5 class="card-title">{{ $project->title }}</h5>
                <p class="card-text">{{ $project->content }}</p>
                <p>Slug: {{ $project->slug }}</p>
                <small class="d-block text-end">Tipologia: {{$project->type?$project->type->name:'Nessuna tipologia'}}</small>
            </div>
        </div>
    </div>
@endsection
