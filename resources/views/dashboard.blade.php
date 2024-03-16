@extends('layouts.app')

@section('content')
    <h1>Properties</h1>

    @if($property->isEmpty())
        <p>You don't have any properties yet.</p>
    @else
        <div class="row row-cols-1 row-cols-md-2 g-4">
                @foreach($property as $properties)
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <img src="{{ asset($properties->photo) }}" class="card-img-top" alt="Image of the building">
                                <h5 class="card-title">{{ $properties->title }}</h5>
                                <p class="card-text">{{ $properties->location}}</p>
                                <p class="card-text">{{ $properties->price}}</p>    
                                <div class="mt-4">
                                <a href="{{ route('property.create') }}" class="btn btn-primary">View Property</a>
                            </div>                            
                            </div>
                            
                        </div>
                    </div>
                @endforeach
        </div>
    @endif
@endsection