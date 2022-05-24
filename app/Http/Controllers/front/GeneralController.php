<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
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
        return view('welcome', compact('estates'));
    }

    public function showEstate($id)
    {
        $estate = Estate::findOrFail($id);
        return view('estate_details', compact('estate'));
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
}
