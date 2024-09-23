<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'name'  => 'DOGs',
                'created_at' => now(),
            ],
        ];

        foreach($projects as $project)
        {
            Project::updateOrCreate(['name' => $project['name']], $project);
        }
    }
}
