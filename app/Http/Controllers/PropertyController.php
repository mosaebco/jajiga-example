<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\City;
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
        return view('property.create', [
            'cities' => City::all(),
        ]);
    }

    
    public function store(StorePropertyRequest $request)
    {
       
        // dd($request);

        $request -> user() -> properties() -> create([
            'image' => $request -> file('image') -> store('property-image', 'public'),
            'description' => $request -> input('description'),
            'price' => $request -> input('price'),
            'city_id' => $request -> input('city_id'),
        ]);
        return to_route('dashboard');
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
