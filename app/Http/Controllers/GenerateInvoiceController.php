<?php

namespace App\Http\Controllers;

 use Barryvdh\DomPDF\Facade\Pdf;
 use App\Models\Invoice;

class GenerateInvoiceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $invoice = Invoice::first();
        return Pdf::loadView('invoices.index', compact('invoice'))->download('invoice.pdf');
    }
}
