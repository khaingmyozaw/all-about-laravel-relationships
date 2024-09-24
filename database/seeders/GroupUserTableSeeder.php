<?php

namespace Database\Seeders;

use App\Models\Group;
use App\Models\GroupUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::get();
        $groups = Group::get();

        // foreach($groups as $group)
        // {
        //     foreach($users as $user)
        //     {
        //         GroupUser::updateOrCreate(
        //             [
        //                 'user_id' => $user->id,
        //                 'group_id' => $group->id
        //             ],
        //             ['active' => rand(0, 1)]
        //         );
        //     }
            
        // }
        // for($i = 0; $i < 15; $i++)
        //     {
        //         GroupUser::updateOrCreate([
        //             'user_id'  => $users->random()->id,
        //             'group_id' => $groups->random()->id,
        //         ], ['active'   => rand(0, 1),]);
        //     }

        foreach($users as $user)
        {
            // $assignedGroups = $groups->random()->id->pluck('id');
            // dd($assignedGroups);

            foreach($groups as $group)
            {
                $user->groups()->syncWithoutDetaching([
                    $group->id => ['active' => (bool) rand(0, 1)],
                ]);
            }
        }
    }
}
