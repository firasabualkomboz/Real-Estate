<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Estate;
use App\Models\Property;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        $estates = Estate::all();
        return view('manager.apartments.index', compact('properties', 'estates'));
    }

    public function create()
    {
        $properties = Property::all();
        $estates = Estate::all();
        $apartment = new Apartment();
        if ($estates->count() == 0) {
            return view('manager.estates.create');
        }
        return view('manager.apartments.create', compact('properties', 'estates', 'apartment'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'features' => 'required',
            'year_built' => 'required',
            'apartments' => 'required',
            'space' => 'required',
            'rooms' => 'required',
            'bathroom' => 'required',
            'on_floor' => 'required',
            'image' => 'required',
            'property_id' => 'required',
            'estate_id' => 'required',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('/', 'uploads');
        };
        $apartment = new Apartment([

            'name' => $request->name,
            'description' => $request->description,
            'features' => $request->features,
            'year_built' => $request->year_built,
            'apartments' => $request->apartments,
            'space' => $request->space,
            'rooms' => $request->rooms,
            'bathroom' => $request->bathroom,
            'on_floor' => $request->on_floor,
            'image' => $data['image'],
            'property_id' => $request->property_id,
            'estate_id' => $request->estate_id

        ]);
        $apartment->save();
//        toastr()->success('Added Successfully');
        return redirect()->back()->with(
            array(
                'message' => 'Edit Successfully',
                'alert-type' => 'success'
            )
        );

    }


}
