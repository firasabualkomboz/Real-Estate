<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\OwnerRequest;
use App\Models\Apartment;
use App\Models\Estate;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use DataTables;
use function app\Helper\successMessage;

class OwnerController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:owner-list|owner-create|owner-edit|owner-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:owner-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:owner-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:owner-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $owners = User::where('type', '2')->with('estate', 'apartment')->get();
        return view('manager.owners.index', compact('owners'));
    }

    public function getOwners(Request $request)
    {
        if ($request->ajax()) {
            $owners = User::where('type', '2')->latest()->get();
            return DataTables::of($owners)
                ->addIndexColumn()
                ->addColumn('record_select', 'manager.owners.data_table.record_select')
                ->editColumn('statistics', function (User $owner) {
                    $countEstate  =  $owner->estate->count();
                    $countApartment = $owner->apartment->count();
                    return 'Estate : ' . $countEstate . '  '  . 'Apartment : ' .$countApartment;
                })
                ->addColumn('actions', 'manager.owners.data_table.actions')
                ->rawColumns(['record_select', 'actions'])
                ->toJson();
        }

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manager.owners.create', [
            'owner' => new User(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnerRequest $request)
    {
        $data = $request->except('document');
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $data['document'] = $request->file('document')->store('/', 'uploads');
        };

        $owner = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'phone' => $request['phone'],
            'type' => '2',
            'address' => $request->address,
            'document' => $data['document']
        ]);
        // send email to owner contain all information account
        return successMessage();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $allApartmentRent = Apartment::where('owner_id', $id)->where('status', 'rent')->get();

        foreach ($allApartmentRent as $apartment) {
            $get = $apartment->commission / 100;
            $finalProfitCompany = $get * $apartment->rent . '<br>';
        }
        $owners = User::where('type', '2')->get();

        $owner = User::findOrFail($id);
        return view('manager.owners.show', compact('owner', 'allApartmentRent', 'owners'));
    }

    public function assignApartmentToOwner(Request $request, $id)
    {
        dd($request);
        die();
        $apartment = Apartment::find($id);
        dd($apartment);
        $apartment->owner_id = $request->owner_id;
        $apartment->update();
        $apartment->save();

        return successMessage();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
