<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Estate;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class EstateController extends Controller
{
    public function index()
    {
        $estates = Estate::with('owner')->get();
        return view('manager.estate.index', compact('estates'));
    }

    public function create()
    {
        $owners = User::where('type', '2')->get();
        if ($owners->count() == 0) {
            return view('manager.owners.create');
        }
        return view('manager.estate.create', compact('owners'), [
            'estate' => new Estate(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'floors' => 'required',
            'apartments' => 'required',
            'owner_id' => 'required',
            'image' => 'required',
            'location' => 'required'
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('/', 'uploads');
        };
        $estate = new Estate([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'floors' => $request->floors,
            'apartments' => $request->apartments,
            'owner_id' => $request->owner_id,
            'image' => $data['image'],
            'location' => $request->location
        ]);

        return redirect()->back()->with(
            array(
                'alert-type' => 'success',
                'message' => 'Added Successfully',
            )
        );


    }

}
