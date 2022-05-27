<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Appointment;
use App\Models\Estate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{
    public function index()
    {
        $estates = Estate::all();
        $apartments = Apartment::with('estate')->get();
        return view('welcome', compact('estates', 'apartments'));
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
