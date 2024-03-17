@extends('layouts.app')
@section('content')
    <div class='container'>
        <div class='row'>
            <div class='col-md-8'>
                <div class='card'>
                <h1> {{ $property -> title }}</h1>
                <img class='card-img' src="{{ asset($property->photo)}}" alt="{{ $property -> title}}">
                <p>${{ $property->price }}</p>
                <p>{{ $property->type }}</p>
                <p> {{ $property->description }} </p>
                <ul>
                    <li>Bedrooms: {{ $property->bedrooms }}</li>
                    <li>Bathrooms: {{ $property->bathrooms }}</li>
                    <li>Location: {{ $property->location }}</li>
                </ul>
                <a href="#" class="btn btn-primary">Email Realtor</a>
                </div>
                
            </div>
        </div>
    </div>
@endsection