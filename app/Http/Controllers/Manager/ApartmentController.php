<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\ApartmentRequest;
use App\Models\Apartment;
use App\Models\Estate;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;

class ApartmentController extends Controller
{
    public function index()
    {
        $properties = Property::all();
        $estates = Estate::all();
        $apartments = Apartment::with('estate', 'property')->get();
        return view('manager.apartments.index', compact('properties', 'estates', 'apartments'));
    }

    public function create()
    {
        $properties = Property::all();
        $estates = Estate::all();
        $apartment = new Apartment();
//        if ($estates->count() == 0) {
//            return view('manager.estate.create');
//        }
        return view('manager.apartments.create', compact('properties', 'estates', 'apartment'));
    }

    public function store(ApartmentRequest $request)
    {
        $data = $request->except('image');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('/', 'uploads');
        };

        $photos = [];

//        if ($request->hasFile('photos')) {
//            foreach ($request->file('photos') as $item) {
//                $item = $request->file('photos')->store('/', 'uploads');
//                $data_photos[] = $item;
//
//            }
//        }
        if ($request->hasfile('photos')) {

            foreach ($request->file('photos') as $image) {

                $name = $image->getClientOriginalName();
                $image->store('/', 'uploads');
                $data_photos[] = $name;


            }
        }
        $apartment = new Apartment([

            'name' => $request->name,
            'description' => $request->description,
            'features' => $request->features,
            'year_built' => $request->year_built,
            'space' => $request->space,
            'rooms' => $request->rooms,
            'bathroom' => $request->bathroom,
            'on_floor' => $request->on_floor,
            'image' => $data['image'],
            'property_id' => $request->property_id,
            'estate_id' => $request->estate_id,
            'photos' => json_encode($data_photos),
        ]);
        $apartment->save();
//        toastr()->success('Added Successfully');
        return redirect()->back()->with(
            array(
                'message' => 'Added Successfully',
                'alert-type' => 'success'
            )
        );

    }

    public function show($id)
    {
        $apartment = Apartment::with('estate', 'property')->findOrFail($id);
        return view('manager.apartments.show', compact('apartment'));

    }


}