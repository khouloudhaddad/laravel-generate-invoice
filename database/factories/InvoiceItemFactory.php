<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'price_excluding_vat' => $priceExcludingVat = fake()->randomDigit(),
            'vat' => $vat = fake()->numberBetween(1, 100),
            'price_including_vat' => $priceExcludingVat * (1 + ($vat / 100)),
            'invoice_id' => Invoice::factory(),
        ];
    }
}
