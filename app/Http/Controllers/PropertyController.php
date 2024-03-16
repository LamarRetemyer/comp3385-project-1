<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\Support\Facades\Storage;

class PropertyController extends Controller
{
    public function create(){
        return view('properties\create');
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'bedrooms' => 'required|integer',
            'bathrooms' => 'required|integer',
            'location' => 'required|string',
            'price' => 'required|integer',
            'type' => 'required|string',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        

       
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $filename = $file->getClientOriginalName(); 
            $file->move(public_path('houses'), $filename);
            $validatedData['photo'] = 'houses/' . $filename;       
           
        }

       
        $properties = Property::create($validatedData);

       
        return redirect()->route('property.create')->with('success', 'Property added successfully.');
    }


}
