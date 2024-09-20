<?php

namespace Database\Seeders;

use App\Models\Lamborghini;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LamborghiniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $carModels = [
            'Lamborghini Aventador', 
            'Lamborghini Huracán', 
            'Lamborghini Urus (SUV)', 
            'Lamborghini Sian', 
            'Lamborghini Centenario',
        ];
        $users = User::limit(5)->get();
        foreach($carModels as $i => $car) {
            if(isset($users[$i])) {
                Lamborghini::updateOrCreate(
                    ['model'    => $car],
                    ['user_id'  => $users[$i]->id],
                );
            }
        }
    }
}
