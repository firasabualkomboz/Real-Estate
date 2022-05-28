<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Appointment;
use App\Models\Estate;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function index()
    {
        $items = new Estate();
        if (request('name')){
        $items = $items->where('name' , 'like' , '%' , request('name') . '%');
        }
        if (request('property_id')){
            $items = $items->where('property_id', request('property_id'));
        }
        if (request('bedrooms') != '') {
            $items = $items->where('bedrooms', request('bedrooms'));
        }    if (request('bathrooms') != '') {
            $items = $items->where('bathrooms', request('bathrooms'));
        }

        $properties = Property::pluck('name', 'id')->all();
        $estates = Estate::all();
        $apartments = Apartment::with('estate')->get();
        $items = $items->latest()->paginate(15);

        return view('welcome', compact('estates', 'apartments' , 'properties' , 'items'));
    }

    public function showEstate($id)
    {
        $estate = Estate::findOrFail($id);
        return view('estate_details', compact('estate'));
    }

    public function showApartment($id)
    {
        $apartment = Apartment::findOrFail($id);
        return view('apartment_details', compact('apartment'));
    }

    public function makeAppointment(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'time' => 'required',
            'note' => 'nullable',
        ]);

        $appointments = new Appointment([

            'date' => $request->date,
            'time' => $request->time,
            'note' => $request->note

        ]);

        if (auth()->user()->type == '0') {

            $appointments->save();
            return redirect()->back();
        }
        abort(404);

    }

    public function support()
    {
        return view('supports');
    }
}
