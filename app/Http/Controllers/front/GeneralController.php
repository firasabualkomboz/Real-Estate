<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use App\Models\Estate;
use Illuminate\Http\Request;

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
}
