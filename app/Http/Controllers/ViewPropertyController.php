<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Property;
use Illuminate\View\View;


class ViewPropertyController extends Controller
{
    public function index(): View
    {   
        $property= Property::all();
        return view('dashboard', compact('property'));
    }
}
