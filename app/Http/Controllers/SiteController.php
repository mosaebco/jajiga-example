<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view('home.welcome',[
            'properties' => Property::all()->chunk(3),
        ]);
    }
}
