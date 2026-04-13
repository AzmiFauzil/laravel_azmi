<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Books;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Books::create([
            'judul' => 'Bahasa Portugis untuk SMA/MA Kelas XI',
            'pengarang' => 'Leonel Ronaldo',
            'penerbit' => 'FIFA',
            'tahun_terbit' => 1945,
            'jumlah_halaman' => 1800,
        ]);
    }
}
