<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;

class PropertyController extends Controller
{

    public function index()
    {
        //
    }

    
    public function create()
    {
        return view('property.create');
    }

    
    public function store(StorePropertyRequest $request)
    {
        //
    }


    public function show(Property $property)
    {
        //
    }

    
    public function edit(Property $property)
    {
        //
    }

   
    public function update(UpdatePropertyRequest $request, Property $property)
    {
        //
    }

   
    public function destroy(Property $property)
    {
        //
    }
}
