<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\View\View;

class IndividualPropertyController extends Controller
{
    public function index($id): View
    {   
        $property= Property::findOrFail($id);
        return view('details.individual', compact('property'));
    }

}
