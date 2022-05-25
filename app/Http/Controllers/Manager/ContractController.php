<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Apartment;
use App\Models\Contract;
use App\Models\Estate;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use function app\Helper\successMessage;

class ContractController extends Controller
{

    public function index()
    {
        $apartments = Apartment::with('estate', 'property')->get();
        $contacts = Contract::all();
        return view('manager.contracts.index', compact('apartments', 'contacts'));
    }

    public function create()
    {
        $apartments = Apartment::all();
        $tenants = User::where('type', '0')->get();
        $contact = new Contract();
        if ($apartments->count() == 0 || $tenants->count() == 0) {
            return view('manager.contracts.create');
        }
        return view('manager.contracts.create', compact('apartments', 'contact', 'tenants'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'apartment_id' => 'required',
            'tenant_id' => 'required',
            'price' => 'required',
            'commission' => 'required',
            'start_at' => 'required',
            'end_at' => 'required',
            'image' => 'required',
        ]);
        $data = $request->except('image');
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $data['image'] = $request->file('image')->store('/', 'uploads');
        };
        $apartment = new Apartment([

            'apartment_id' => $request->apartment_id,
            'tenant_id' => $request->tenant_id,
            'price' => $request->price,
            'commission' => $request->commission,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'status' => $request->status,
            'image' => $request->image,

        ]);
        return successMessage();
    }

}
