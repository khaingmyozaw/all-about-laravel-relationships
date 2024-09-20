<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bob@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Mg Mg',
                'email' => 'charlie@example.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach($users as $user) {
            $data = User::where('email', $user['email']);

            if(isset($data)) {
                $data->update($user);
            }else {
                User::create($user);
            }

        }
    }
}
