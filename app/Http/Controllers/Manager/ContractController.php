<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Http\Requests\Manager\ContractRequest;
use App\Models\Apartment;
use App\Models\Contract;
use App\Models\Estate;
use App\Models\Invoice;
use App\Models\Property;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Symfony\Component\Console\Input\Input;
use function app\Helper\apisuccess;
use function app\Helper\errorMessage;
use function app\Helper\successMessage;
use DataTables;

class ContractController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:contract-list|contract-create|contract-edit|contract-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:contract-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:contract-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:contract-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $apartments = Apartment::with('estate', 'property')->get();
        $contracts = Contract::with('apartment', 'tenant', 'estate')->paginate(10);
        return view('manager.contracts.index', compact('apartments', 'contracts'));
    }

    public function getContracts(Request $request)
    {
        if ($request->ajax()) {
            $contracts = Contract::with('apartment', 'tenant', 'estate')->latest()->get();
            return DataTables::of($contracts)
                ->addIndexColumn()
                ->addColumn('name', function (Contract $contract) {
                    return $contract->estate_id ?: $contract->apartment->name;
                })
                ->addColumn('tenant', function (Contract $contract) {
                    return $contract->tenant->name;
                })
                ->editColumn('start_at', function (Contract $contract) {
                    return $contract->start_at;
                })
                ->editColumn('end_at', function (Contract $contract) {
                    return $contract->end_at;
                })
                ->editColumn('rent', function (Contract $contract) {
                    return $contract->estate_id ?  : $contract->apartment->rent . ' $ / Per Month ';
                })
                ->editColumn('commission', function (Contract $contract) {
                    return $contract->estate_id ?  : $contract->apartment->commission . '%';
                })
                ->addColumn('record_select', 'manager.contracts.data_table.record_select')
                ->addColumn('actions', 'manager.contracts.data_table.actions')
                ->rawColumns(['record_select', 'actions'])
                ->toJson();
        }
    }

    public function show($id)
    {
        $contract = Contract::find($id);
        return view('manager.contracts.show' , compact('contract'));
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

            'type' => $request->type,
            'apartment_id' => $request->type == 'apartment' ? $request->apartment_id : null,
            'estate_id' => $request->type == 'estate' ? $request->estate_id : null,
            'tenant_id' => $request->tenant_id,
            'start_at' => $request->start_at,
            'end_at' => $request->end_at,
            'document' => $data['document'],

        ]);


        if ($request->type == 'estate') {

            $estate = Estate::where('id', $request->estate_id)->first();
            $estate->status = 'rent';
            $estate->update();
            $contract->save();

            $invoice = Invoice::create([
                'contract_id' => $contract->id,
                'tenant_id' => $contract->tenant_id,
                'status' => 'pending',
            ]);
            $invoice->save();

        }

        if ($request->type == 'apartment') {

            $apartment = Apartment::where('id', $request->apartment_id)->first();

            $apartment->status = 'rent';
            $apartment->update();
            $contract->save();

            $invoice = Invoice::create([
                'contract_id' => $contract->id,
                'tenant_id' => $contract->tenant_id,
                'status' => 'pending',
            ]);
            $invoice->save();

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
        $apartments = Apartment::where('estate_id', $id)->pluck('name', 'id');
        return json_encode($apartments);
    }




}
