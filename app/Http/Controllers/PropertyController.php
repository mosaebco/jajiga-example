<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\City;
use App\Http\Requests\StorePropertyRequest;
use App\Http\Requests\UpdatePropertyRequest;
use Illuminate\Http\Request;

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
       
        // dd($request -> city_id);

        $request -> user() -> properties() -> create([
            'image' => $request -> file('image') -> store('property-image', 'public'),
            'description' => $request -> input('description'),
            'price' => $request -> input('price'),
            'city_id' => $request -> input('city_id') ?? '1',
        ]);
        return to_route('dashboard');
    }


    public function show(Property $property)
    {
        return view('property.show', [
            'property' => $property,
        ]);
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

    public function reservation(Property $property)
    {
        return view('property.reservation', [
            'property' => $property,
        ]);
    }

    public function storeReservation(Request $request, Property $property)
    {
        $request -> user() -> reservations() -> create([
            'total_days' => $request -> input('total_days'),
            'total_price' => $property->price * $request -> input('total_days'),
            'property_id' => $property -> id,
            'user_id' => $request -> user() -> id,
        ]);
        return to_route('dashboard');
    }

    public function dashboard()
    {

        return view('dashboard', [
            'properties' => Property::all(),
        ]);
        // return view('dashboard', [
        //     'reservations' => reservationauth()->user()->reservations()->get(),
        //     'properties' => auth()->user()->properties()->where()->get()->chunk(3),
        // ]);
    }
}
