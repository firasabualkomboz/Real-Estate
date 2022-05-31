<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{

    public function index()
    {
        $invoices = Invoice::with('contract', 'tenant')->paginate(10);
        return view('manager.invoices.index', compact('invoices'));
    }
    public function show($id){

        $invoice = Invoice::with('contract', 'tenant')->find($id);
        return view('manager.invoices.show', compact('invoice'));

    }

}
