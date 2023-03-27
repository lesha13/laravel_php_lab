<?php

namespace Database\Seeders;

use App\Models\Mark;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MarkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mark::insert([
            [
                'name' => 'Math',
                'mark' => 1,
                'date' => '27:03:2023'
            ],
            [
                'name' => 'Programming',
                'mark' => 2,
                'date' => '27:03:2023'
            ],
            [
                'name' => 'English',
                'mark' => 3,
                'date' => '27:03:2023'
            ],
        ]);
    }
}
