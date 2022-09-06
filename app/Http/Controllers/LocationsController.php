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

    public function show(Location $location)
    {

        return view('locations.show', compact('location'));
    }

    public function store()
    {
        $attributes = request()->validate([
            'name' => 'required',
            'description' => ''
        ]);

        $attributes['owner_id'] = auth()->id();

        Location::create($attributes);

        return redirect('/locations');
    }
}
