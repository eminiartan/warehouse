<?php

namespace Database\Seeders;

use App\Models\Depo;
use App\Models\Market;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Invoice::factory(500)
            ->create()
            ->each(function ($invoice) {
                Market::factory(1)
                    ->create([
                        'invoice_id' => $invoice->id
                    ])
                    ->each(function ($invoice) {
                        Depo::factory(1)
                            ->create([
                                'invoice_id' => $invoice->id
                            ]);
                    });
            });
    }
}
