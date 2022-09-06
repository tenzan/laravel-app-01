<?php

namespace App\Http\Controllers;

use App\Models\Location;

class LocationsController extends Controller
{
    public function index()
    {
        $locations = Location::all();

        return view('locations.index', compact('locations'));

    }

    public function store()
    {
        $attributes = request()->validate(['name' => 'required', 'description' => '']);

        Location::create($attributes);

        return redirect('/locations');
    }
}
