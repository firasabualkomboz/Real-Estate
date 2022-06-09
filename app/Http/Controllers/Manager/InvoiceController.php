<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;
use function app\Helper\successMessage;

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

    public function show($id)
    {

        $invoice = Invoice::with('contract', 'tenant')->find($id);
        return view('manager.invoices.show', compact('invoice'));

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
