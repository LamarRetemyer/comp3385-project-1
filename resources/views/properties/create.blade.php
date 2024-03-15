@extends('layouts.app')
@section('content')

    <h1>Add New Property</h1>

    <form method="POST" action="{{ route('property.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Property Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        </div>

        <div class="form-group">
            <label for="bedrooms">No. of Rooms</label>
            <input type="number" class="form-control" id="bedrooms" name="bedrooms" value="{{ old('bedrooms') }}" required>
        </div>

        <div class="form-group">
            <label for="bathrooms">No. of Bathrooms</label>
            <input type="number" class="form-control" id="bathrooms" name="bathrooms" value="{{ old('bathrooms') }}" required>
        </div>

        <div class="form-group">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ old('price') }}" required>
        </div>

        <div class="form-group">
            <label for="type">Property Type</label>
            <select class="form-control" id="type" name="type">
                <option value="House">House</option>
                <option value="Apartment">Apartment</option>
            </select>
        </div>

        <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location" value="{{ old('location') }}" required>
        </div>

        <div class="form-group">
            <label for="photo">Photo</label>
            <input type="file" class="form-control-file" id="photo" name="photo" accept="image/*">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>



@endsection