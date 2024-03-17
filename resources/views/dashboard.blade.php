@extends('layouts.app')

@section('content')
    <h1> 
        <div class="pl-10 ">Properties</div>
    </h1>

    @if($property->isEmpty())
        <p>You don't have any properties yet.</p>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4  h-75 w-75">
                @foreach($property as $properties)
                    <div class="col">
                        <div class="card h-90 w-75">
                            <div class="card-body" style="text-align: left;" >
                                <img src="{{ asset($properties->photo) }}" class="card-img-top" alt="Image of the building" style="width: 180px;">
                                <h5 class="card-title" style="font-weight: bold; ">{{ $properties->title }}</h5>
                                <p class="card-text" > <img  src="images/location.png" alt="Location" style="width: 20px;"> {{ $properties->location}}</p>
                                <p class="card-text" style="display: inline-block; padding-left: 20px; padding-right: 20px; padding: top 5px; border: 2px solid #60a5fa; border-radius: 45%; color: white; background-color: #60a5fa; color: white; font-weight:bold;" >${{ $properties->price}}</p>    
                            <div class="card-footer" style="padding: 10px; background-color: #15b8a7; text-align: center;">
                                <a href="{{ route('property.show', ['id' => $properties->id]) }}" style="color:white; font-weight: bold; text-decoration: none;" >View More Details</a>
                            </div>                                                    
                        </div>                            
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection