<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Client;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $bitcoin = Project::first();
        $clients = [
            [
                'name' => 'John Doe',
                'email' => 'john@example.com',
                'password' => bcrypt('password'),
                // 'project_id' => $bitcoin->id,
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'jane@example.com',
                'password' => bcrypt('password'),
                // 'project_id' => $bitcoin->id,
            ],
            [
                'name' => 'Alice Johnson',
                'email' => 'alice@example.com',
                'password' => bcrypt('password'),
                // 'project_id' => $bitcoin->id,
            ],
        ];

        foreach($clients as $client)
        {
            Client::updateOrCreate(
                [
                    'email' => $client['email'],
                    'project_id' => Project::all()->random()->id,
                ],
                $client
            );
        }
    }
}
