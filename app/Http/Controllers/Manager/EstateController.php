<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\EstateRequest;
use App\Models\Estate;
use App\Models\Property;
use App\Models\Tag;
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
//        $owners = User::where('type', '2')->get();
//        if ($owners->count() == 0) {
//            return view('manager.owners.create');
//        }
        return view('manager.estate.create', [
            'estate' => new Estate(),
            'properties' => Property::all(),
            'tags' => Tag::all(),
            'estate_tag' => [],
            'owners' => User::where('type' , '2')->get()

        ]);
    }

    public function store(EstateRequest $request)
    {

        $data = $request->except('images');
        if ($request->hasFile('images') && $request->file('images')->isValid()) {
            $data['images'] = $request->file('images')->store('/', 'uploads');
        };

        $estate = new Estate([
            'name' => $request->name,
            'rent' => $request->rent,
            'property_id' => $request->property_id,
            'owner_id' => $request->owner_id,
            'area' => $request->area,
            'commission' => $request->commission,
            'description' => $request->description,
            'location' => $request->location,
            'notes' => $request->notes,
            'estate_age' => $request->estate_age,
            'bathrooms' => $request->bathrooms,
            'bedrooms' => $request->bedrooms,
            'rooms' => $request->rooms,
            'images' => $data['images'],


        ]);

        $tags = $request->post('tag' , []);
        $estate->tags()->attach($tags);


        return $this->successMsg();


    }

    function successMsg()
    {
        $msg = array(
            'alert-type' => 'success',
            'message' => 'Added Successfully',
        );
        return redirect()->back()->with($msg);
    }

}
