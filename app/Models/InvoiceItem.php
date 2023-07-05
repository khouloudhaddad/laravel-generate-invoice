<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

     protected $fillable = [
        'price_excluding_vat',
        'price_including_vat',
        'vat',
    ];

    public function invoice(): BelongsTo
    {
        return $this->belongsTo(
            Invoice::class,
        );
    }
}
