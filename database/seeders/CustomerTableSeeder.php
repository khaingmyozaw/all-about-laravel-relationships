<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
            'name' => 'Justin Keber',
            ],
            [
            'name' => 'Micle Jay',
            ],
        ];

        foreach($customers as $customer)
        {
            Customer::updateOrCreate($customer);
        }
    }
}
