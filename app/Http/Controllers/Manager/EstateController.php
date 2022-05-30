<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\EstateRequest;
use App\Models\Estate;
use App\Models\Property;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class EstateController extends Controller
{
    public function index()
    {
        $estates = Estate::with('owner' , 'property')->get();
        return view('manager.estate.index', compact('estates'));
    }

    public function show($id)
    {
        $estate = Estate::find($id);
        return view('manager.estate.show' , compact('estate'));
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
            'estate_tags' => [],
            'owners' => User::where('type' , '2')->get()

        ]);
    }

    public function store(EstateRequest $request)
    {

        $images = [];

        if ($request->hasfile('images')) {

            foreach ($request->file('images') as $image) {
                $data_images[] =   $image->store('/', 'uploads');
            }
        }

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
            'images' => json_encode($data_images),

        ]);
        $estate->save();
        $tags = $request->post('tags' , []);

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
