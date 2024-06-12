<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str as Str;

class CustomerOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = DB::table('customers')
            ->where('email', 'joe@gmail.com')
            ->join('orders', 'customers.id', '=', 'orders.customer_id')
            ->get();

        $this->command->info($data);
    }
}
