<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employees = [
            ['name' => 'Bob'],
            ['name' => 'Alice'],
        ];

        foreach($employees as $employee)
        {
            Employee::updateOrCreate($employee);
        }
    }
}
