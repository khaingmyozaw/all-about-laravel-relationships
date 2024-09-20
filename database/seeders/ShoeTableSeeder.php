<?php

namespace Database\Seeders;

use App\Models\Shoe;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShoeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        $shoes = [
            ['name' => 'Nike Air Max', 'size' => 42],
            ['name' => 'Adidas Ultraboost', 'size' => 44],
            ['name' => 'Puma RS-X', 'size' => 40],
            ['name' => 'Reebok Classic', 'size' => 43],
            ['name' => 'Vans Old Skool', 'size' => 41],
            ['name' => 'Converse Chuck Taylor', 'size' => 42],
            ['name' => 'New Balance 574', 'size' => 44],
            ['name' => 'Under Armour HOVR', 'size' => 45],
            ['name' => 'Asics Gel-Lyte', 'size' => 40],
            ['name' => 'Fila Disruptor', 'size' => 43],
        ];

        foreach($shoes as $shoe) {
            Shoe::updateOrCreate(
                [
                    'name'  => $shoe['name'],
                    'user_id' => $users->random()->id,
                ],
                [
                    'size'  => $shoe['size'],
                ]
            );
        }
    }
}
