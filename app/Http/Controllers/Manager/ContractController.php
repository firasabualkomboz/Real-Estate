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
use Illuminate\Support\Facades\Response;
use Symfony\Component\Console\Input\Input;
use function app\Helper\apisuccess;
use function app\Helper\errorMessage;
use function app\Helper\successMessage;

class ContractController extends Controller
{

    public function index()
    {
        $apartments = Apartment::with('estate', 'property')->get();
        $contracts = Contract::with('apartment', 'tenant', 'estate')->paginate(10);
        return view('manager.contracts.index', compact('apartments', 'contracts'));
    }

    public function create()
    {
        $apartments = Apartment::where('status', 'available')->get();
        $tenants = User::where('type', '0')->get();
        $contact = new Contract();


        if ($tenants->count() == 0) {
            alert('Note : Done Have Any Tenant Now !');
        }
        return view('manager.contracts.create', compact('apartments', 'contact', 'tenants'), [

            'estates' => Estate::where('status', 'available')->get(),
        ]);
    }

    public function store(ContractRequest $request)
    {

        $data = $request->except('document');
        if ($request->hasFile('document') && $request->file('document')->isValid()) {
            $data['document'] = $request->file('document')->store('/', 'uploads');
        };

        $contract = new Contract([

            'type'          => $request->type,
            'apartment_id'  => $request->type == 'apartment' ? $request->apartment_id : null,
            'estate_id'     => $request->type == 'estate' ? $request->estate_id : null,
            'tenant_id'     => $request->tenant_id,
            'start_at'      => $request->start_at,
            'end_at'        => $request->end_at,
            'document'      => $data['document'],

        ]);

        if ($request->type == 'estate') {

            $estate = Estate::where('id', $request->estate_id)->first();
            $estate->status = 'rent';
            $estate->update();
            $contract->save();

        }

        if ($request->type == 'apartment') {

            $apartment = Apartment::where('id', $request->apartment_id)->first();
            $apartment->status = 'rent';
            $apartment->update();
            $contract->save();

        }

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

    public function getAjaxApartment($id)
    {
        $items = Apartment::where('estate_id', $id)->pluck('name', 'id')->all();
        $view = view('manager.contracts._apartment', compact('items'))->render();
        return apisuccess($view);
    }

    public function show($id)
    {
        $contract = Contract::find($id);
        return $contract;
    }

}
