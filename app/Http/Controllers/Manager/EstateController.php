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
        return view('manager.estate.create', compact('owners'), [
            'estate' => new Estate(),
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->except('image');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('/', 'uploads');
        };
        $estate = new Estate([
            'name' => $request->name,
            'description' => $request->description,
            'type' => $request->type,
            'space' => $request->space,
            'owner_id' => $request->owner_id,
            'image' => $data['image']
        ]);
        $estate->save();
        Alert::success('Congrats', 'You\'ve Successfully Added');
        return redirect()->back();

    }

}
