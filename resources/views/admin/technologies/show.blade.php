@extends('layouts.admin')

@section('content')
    <div class="col-10 ">
        <div class="card">
            <div class="card-body">
                
                <h5 class="card-title">{{ $technology->name }}</h5>
                <p>Slug: {{ $technology->slug }}</p>
                <small class="d-block text-end">Progetti abbinati: {{ count($technology->projects) }}</small>
            </div>
        </div>
    </div>
@endsection
