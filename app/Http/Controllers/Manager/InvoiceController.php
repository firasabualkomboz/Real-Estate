<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Never_;
use function app\Helper\successMessage;
use DataTables;

class InvoiceController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:invoice-list|invoice-create|invoice-edit|invoice-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:invoice-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:invoice-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:invoice-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $invoices = Invoice::with('contract', 'tenant')->paginate(10);
        return view('manager.invoices.index', compact('invoices'));
    }

    public function getInvoices(Request $request)
    {
        if ($request->ajax()) {
            $invoices = Invoice::with('contract', 'tenant')->latest()->get();
            return DataTables::of($invoices)
                ->addIndexColumn()
                ->addColumn('tenant', function (Invoice $invoice) {
                    return $invoice->tenant->name;
                })
                ->addColumn('apartment', function (Invoice $invoice) {
                    return $invoice->type ?: 'NAN';
                })
//                ->addColumn('record_select', 'manager.invoices.data_table.record_select')
                ->addColumn('actions', 'manager.invoices.data_table.actions')
                ->rawColumns(['record_select', 'actions'])
                ->toJson();
        }
    }

    public function show($id)
    {
        $invoice = Invoice::with('contract', 'tenant')->find($id);

        // Get Count Month
        $getStartDate = $invoice->contract->start_at;
        $getEndtDate = $invoice->contract->end_at;

        $start_date = new \DateTime($getStartDate);
        $end_date = new \DateTime($getEndtDate);
        dd($end_date);
        die();
        $interval = $start_date->diff($end_date);
        return view('manager.invoices.show', compact('invoice'));
    }

    function getMonth(){
        $contract = Contract::find($id);
        $start_date = new \DateTime($contract->start_at);
        $end_date = new \DateTime($contract->end_at);
        $interval = $start_date->diff($end_date);
//        dd ($interval->format('%y years, %m month, %d the count of period contract .. '));
        $result = $interval->format('%m');
        dd($result * $contract->apartment->rent);
    }

    public function edit($id)
    {
        $invoice = Invoice::find($id);
        return view('manager.invoices.edit');
    }

    public function update($id, Request $request)
    {
        $invoice = Invoice::find($id);
        $invoice->status = $request->status;
        $invoice->update();
        return successMessage();
    }

}
