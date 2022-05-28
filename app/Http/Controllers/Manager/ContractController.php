<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\ContractRequest;
use App\Models\Apartment;
use App\Models\Contract;
use App\Models\Estate;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use function app\Helper\errorMessage;
use function app\Helper\successMessage;

class ContractController extends Controller
{

    public function index()
    {
        $apartments = Apartment::with('estate', 'property')->get();
        $contracts = Contract::with('apartment', 'tenant')->get();
        return view('manager.contracts.index', compact('apartments', 'contracts'));
    }

    public function create()
    {
        $apartments = Apartment::all();
        $tenants = User::where('type', '0')->get();
        $contact = new Contract();

        if ($tenants->count() == 0) {
            alert('Note : Done Have Any Tenant Now !');
        }
        return view('manager.contracts.create', compact('apartments', 'contact', 'tenants'), [

            'estates' => Estate::all(),
        ]);
    }

    public function store(ContractRequest $request)
    {

        $data = $request->except('document');
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $data['document'] = $request->file('document')->store('/', 'uploads');
        };
        $apartment = new Contract([

            'apartment_id' => $request->apartment_id,
            'estate_id' => $request->estate_id,
            'tenant_id' => $request->tenant_id,
//            'price' => $request->price,
            'commission' => $request->commission,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
//            'status'      => $request->status,
            'document' => $data['document'],

        ]);
        $apartment->save();
        return successMessage();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contract = Contract::find($id);
        $contract->delete();
        return errorMessage();
    }

    public function getEstate($id)
    {
        $estate = Estate::pluck('rent', 'commission');
        return json_decode($estate);
    }

}
