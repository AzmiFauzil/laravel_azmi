<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\physical_condition;

class physicalConditionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        physical_condition::create([
            'blood_type' => 'O',
            'illness' => null,
            'disability' =>null,
            'height' => 170,
            'weight' => 70
        ]);
    }
}
