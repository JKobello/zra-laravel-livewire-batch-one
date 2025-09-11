<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Purchase;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Purchase::factory()->count(10)->create([
            'invoice_number' => 'INV-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT),
            'purchase_order_number' => 'PO-' . str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT),
            'status' => 'pending',
            'payment_status' => 'unpaid',
            'payment_method' => 'CASH',
            'currency' => 'TZS',
            'total_amount' => 0,
            'discount' => 0,
            'tax' => 0,
        ]);
    }
}
