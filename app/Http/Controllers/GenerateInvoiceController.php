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
        $invoice = Invoice::find(3);
        return Pdf::loadView('invoices.index', compact('invoice'))->download('invoice.pdf');
    }
}
