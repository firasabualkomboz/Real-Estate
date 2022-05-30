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
        $apartments = Apartment::where('status' , 'available')->get();
        $tenants = User::where('type', '0')->get();
        $contact = new Contract();

        if ($tenants->count() == 0) {
            alert('Note : Done Have Any Tenant Now !');
        }
        return view('manager.contracts.create', compact('apartments', 'contact', 'tenants'), [

            'estates' => Estate::where('status' , 'available')->get(),
        ]);
    }

    public function store(ContractRequest $request)
    {

        $data = $request->except('document');
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $data['document'] = $request->file('document')->store('/', 'uploads');
        };

        $contract = new Contract([
            'apartment_id' => $request->type == 'apartment' ? $request->apartment : null,
            'estate_id' => $request->type = 'estate' ? $request->estate_id : null,
            'tenant_id' => $request->tenant_id,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'document' => $data['document'],

        ]);
        dd($contract);
        if ($request->type == 'estate'){
            foreach ($request->estate_id as $estate){
                Estate::update([
                   'status' => 'rent'
                ]);
            }
        }elseif ($request->type == 'apartment'){
            foreach ($request->apartment_id as $apartment){
                Apartment::update([
                   'status' => 'rent'
                ]);
            }
        }


        $contract->save();
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
