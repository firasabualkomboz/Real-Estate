<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\ApartmentRequest;
use App\Models\Apartment;
use App\Models\Estate;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Symfony\Component\Console\Input\Input;
use function app\Helper\errorMessage;
use function app\Helper\successMessage;
use DataTables;

class ApartmentController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:apartment-list|apartment-create|apartment-edit|apartment-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:apartment-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:apartment-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:apartment-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $properties = Property::all();
        $estates = Estate::all();
        $apartments = Apartment::with('estate', 'property')->get();
        return view('manager.apartments.index', compact('properties', 'estates', 'apartments'));
    }

    public function getApartments(Request $request)
    {

        if ($request->ajax()) {
            $data = Apartment::with('estate', 'property')->latest()->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('record_select', 'manager.apartments.data_table.record_select')
                ->editColumn('estate', function (Apartment $apartment) {

                    return $apartment->estate->name;
                })
                ->addColumn('actions', 'manager.apartments.data_table.actions')
                ->rawColumns(['record_select', 'actions'])
                ->toJson();
        }

    }


    public function create()
    {
        $properties = Property::all();
        $estates = Estate::all();
        $apartment = new Apartment();
//        if ($estates->count() == 0) {
//            return view('manager.estate.create');
//        }
        return view('manager.apartments.create', compact('properties', 'estates', 'apartment'), [

            'owners' => User::where('type', '2')->get(),

        ]);
    }

    public function edit($id)
    {
        $apartment = Apartment::find($id);
        return view('manager.apartments.edit', compact('apartment'));
    }

    public function update(Request $request, $id)
    {
        $apartment = Apartment::find($id);
        $apartment->status = $request->status;
        $apartment->update();

        return successMessage();
    }

    public function store(ApartmentRequest $request)
    {
        $data = $request->except('image');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('/', 'uploads');
        };

        $photos = [];

        if ($request->hasfile('photos')) {

            foreach ($request->file('photos') as $image) {
                $data_photos[] = $image->store('/', 'uploads');
            }
        }
        $apartment = new Apartment([

            'name' => $request->name,
            'description' => $request->description,
            'features' => $request->features,
            'rent' => $request->rent,
            'commission' => $request->commission,
            'space' => $request->space,
            'rooms' => $request->rooms,
            'bathroom' => $request->bathroom,
            'on_floor' => $request->on_floor,
            'image' => $data['image'],
            'property_id' => $request->property_id,
            'estate_id' => $request->estate_id,
            'photos' => json_encode($data_photos),
            'owner_id' => $request->owner_id,
            'status' => $request->status,

        ]);
        $apartment->save();
        return successMessage();

    }

    public function show($id)
    {
        $apartment = Apartment::with('estate', 'property')->findOrFail($id);
        return view('manager.apartments.show', compact('apartment'));

    }

    public function destroy($id)
    {
        $apartment = Apartment::find($id);
        $apartment->delete();
        return errorMessage();
    }


}
