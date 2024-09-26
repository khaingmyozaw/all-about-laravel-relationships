<?php

namespace Database\Seeders;

use App\Models\Shoe;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            UserTableSeeder::class,
            LamborghiniTableSeeder::class,
            ShoeTableSeeder::class,
            ProjectTableSeeder::class,
            ClientTableSeeder::class,
            ReferralTableSeeder::class,
            GroupTableSeeder::class,
            GroupUserTableSeeder::class,
            CustomerTableSeeder::class,
            EmployeeTableSeeder::class,
            CarTableSeeder::class,
        ]);
    }
}
