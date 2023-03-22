<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::insert([
            [
                'name' => 'Bob',
                'position' => 'Junior',
                'salary' => 1000,
                'experience' => 1,
                'department_id' => 1,
            ],
            [
                'name' => 'Max',
                'position' => 'Junior',
                'salary' => 1000,
                'experience' => 1,
                'department_id' => 1,
            ],
            [
                'name' => 'Nick',
                'position' => 'Senior',
                'salary' => 10000,
                'experience' => 10,
                'department_id' => 2,
            ],
            [
                'name' => 'Ava',
                'position' => 'Middle',
                'salary' => 5000,
                'experience' => 5,
                'department_id' => 2,
            ],
            [
                'name' => 'John',
                'position' => 'Middle',
                'salary' => 7500,
                'experience' => 4,
                'department_id' => 1,
            ],
        ]);
    }
}
