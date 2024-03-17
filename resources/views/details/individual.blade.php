@extends('layouts.app')
@section('content')
    <div class='container'>
        <div class="container mt-4">
            <div class="card">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img class='card-img' src="{{ asset($property->photo)}}" alt="{{ $property -> title}}" style="width: 420px;">
                    </div>
                    <div class='col-md-8'>
                        <div class='card-body'>                    
                            <h1> {{ $property -> title }}</h1>                            
                            <p style="display: inline-block; padding-left: 20px; padding-right: 20px; padding: top 5px; border: 2px solid #60a5fa; border-radius: 45%; color: white; background-color: #60a5fa; color: white; font-weight:bold;">${{ $property->price }}</p>
                            <p style="display: inline-block; padding-left: 20px; padding-right: 20px; padding: top 5px; border: 2px solid yellow; border-radius: 45%; color: white; background-color: yellow; color: white; font-weight:bold;">{{ $property->type }}</p>
                            <p> {{ $property->description }} </p>
                            <p>Bedrooms: {{ $property->bedrooms }} </p>
                            <p> Bathrooms: {{ $property->bathrooms }}</p>
                            <p> Location: {{ $property->location }}</p>
                            </p>
                            <a href="#" class="btn btn-primary" style='background-color:#60a5fa;'>Email Realtor</a>
                    </div>            
            </div>
        </div>
    </div>
@endsection