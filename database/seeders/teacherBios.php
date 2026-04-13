<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\teacher_bios;

class teacherBios extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        teacher_bios::create([
            'birth_place' => 'Bandung',
            'birth_date' => 2000-01-15,
            'religion' => 'Islam',
            'married_status' => 'Married',
            'telp' => '081234567890'
        ]);
    }
}
