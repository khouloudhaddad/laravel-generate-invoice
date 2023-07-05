<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\InvoiceItem;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
    ];

    protected $with = [
        'invoiceItems',
    ];

    public function invoiceItems(): HasMany
    {
        return $this->hasMany(
            InvoiceItem::class,
        );
    }
}
