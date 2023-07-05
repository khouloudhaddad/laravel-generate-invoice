<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('invoice_items', function (Blueprint $table) {
           $table->id();

            $table->integer('price_excluding_vat');
            $table->integer('price_including_vat');
            $table->integer('vat');

            $table->foreignIdFor(Invoice::class);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('invoice_items', function (Blueprint $table) {
            Schema::dropIfExists('invoice_items');
        });
    }
};
