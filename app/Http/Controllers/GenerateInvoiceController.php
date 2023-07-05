<?php

namespace App\Http\Controllers;

 use Barryvdh\DomPDF\Facade\Pdf;
 use Illuminate\Support\Facades\Storage;
 use App\Models\Invoice;

class GenerateInvoiceController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $invoice = Invoice::find(3);

        if(Storage::directoryMissing('invoice')){
            Storage::makeDirectory('invoices');
        }

        Pdf::loadView('invoices.index', compact('invoice'))
        ->save($filename = Storage::path('invoices') . DIRECTORY_SEPARATOR . $invoice->id . '.pdf');

        return response()->file($filename);
    }
}
