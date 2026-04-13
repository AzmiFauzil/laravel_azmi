<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'admin',
        //     'email' => 'admin@example.com',
        // ]);

        // for ($i=0; $i < 10; $i++) { 
        //     Item::create([
        //     'nama_barang' => 'Buku',
        //     'jenis_barang' => 'Alat Tulis',
        //     'jumlah_barang' => 4,
        //     'harga' => 5000,
        // ]);
        // }

        // $this->call(physicalConditionSeeder::class);

        $this->call(teacherBios::class);
    }
}
