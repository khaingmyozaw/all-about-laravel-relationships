<?php

namespace Database\Seeders;

use App\Models\Client;
use App\Models\Referral;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReferralTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = Client::get();
        $referrals = [
            [
                'name'  => 'Jack',
                'email' => 'jack@mail.com',
                'password'  => bcrypt('password'),
            ],
            [
                'name'  => 'Bob',
                'email' => 'bob@mail.com',
                'password'  => bcrypt('password'),
            ],
            [
                'name'  => 'Alice',
                'email' => 'alice@mail.com',
                'password'  => bcrypt('password'),
            ],
            [
                'name'  => 'Jhon Cena',
                'email' => 'jhoncena@mail.com',
                'password'  => bcrypt('password'),
            ],
            [
                'name' => 'Bob Brown',
                'email' => 'bob@example.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Charlie',
                'email' => 'charlie@example.com',
                'password' => bcrypt('password'),
            ],
        ];

        foreach($referrals as $referral)
        {
            Referral::updateOrCreate(
                [
                    'email' =>  $referral['email'],
                    'client_id' => Client::all()->random()->id,
                ],
                $referral
            );
        }
    }
}
