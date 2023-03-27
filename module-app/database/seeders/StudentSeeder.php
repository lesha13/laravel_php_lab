<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::insert([
            [
                'name' => 'Bob',
                'course' => 1,
                'speciality' => 'SA'
            ],
            [
                'name' => 'Max',
                'course' => 3,
                'speciality' => 'PM'
            ],
            [
                'name' => 'Eva',
                'course' => 2,
                'speciality' => 'M'
            ],
        ]);
    }
}
