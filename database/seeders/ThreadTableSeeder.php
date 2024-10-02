<?php

namespace Database\Seeders;

use App\Models\Thread;
use Carbon\Factory;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ThreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        
        foreach(range(1, 3) as $thread) {
            Thread::create([
                'body'  => $faker->paragraph(),
            ]);
        }
    }
}
