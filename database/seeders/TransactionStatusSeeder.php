<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('transaction_statuses')->insert([
            [
                'name' => 'Cart',
                'description' => 'Shopping Cart'
            ],
            [
                'name' => 'Checkout',
                'description' => 'Checkout Order'
            ],
            [
                'name' => 'Paid',
                'description' => 'Paid Order'
            ],
        ]);
    }
}
