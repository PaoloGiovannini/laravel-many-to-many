@extends('layouts.admin')

@section('content')
    <div class="col-10 ">
        <div class="card">
            <div class="card-body">
                
                <h5 class="card-title">{{ $project->title }}</h5>
                @if ($project->image)
                    <img class="img-thumbnail" src="{{asset('storage/' . $project->image)}}" alt="{{$project->title}}"/>
                @endif
                <p class="card-text">{{ $project->content }}</p>
                <p>Slug: {{ $project->slug }}</p>
                @foreach ($project->technologies as $technology)
                    <span class="badge rounded-pill text-bg-info">{{$technology->name}}</span>
                @endforeach
                <small class="d-block text-end">Tipologia: {{$project->type?$project->type->name:'Nessuna tipologia'}}</small>
            </div>
        </div>
    </div>
@endsection
