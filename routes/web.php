<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HalamanController; 
use App\Http\Controllers\Halaman2Controller;
use App\Http\Controllers\RumusKllSegitiga;
use App\Http\Controllers\menu;
use App\Http\Controllers\BooksController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/siswa', [SiswaController::class, 'index']);
Route::get('/tambah_siswa', [SiswaController::class, 'tambah_siswa']);
Route::get('/peminjaman', [PeminjamanController::class, 'peminjaman']);
Route::post('/kirim', [PeminjamanController::class, 'kirim']);
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/halamanbaru', [HalamanController::class, 'halamanbaru']);
Route::get('/halaman2', [Halaman2Controller::class, 'halaman2']);
// Route::get('/rumusluassegitigasikusiku', [RumusLuasSegitigaSikuSikuController::class, 'rumusluassegitigasikusiku']);
Route::get('/rumuskllsegitiga', [RumusKllSegitiga::class, 'rumuskllsegitiga']);
Route::get('/menu', function () {
    $menu = DB::table('menu')->get();
    return view('menu', compact('menu'));
});
Route::get('/tambah_menu', function () {
    return view('tambah_menu');
});
Route::post('/menu', function (Request $request) {
    DB::table('menu')->insert([
        'nama_menu' => $request->nama_menu,
        'harga' => $request->harga,
        'stok' => $request->stok,
        'estimasi_jadi' => $request->estimasi_jadi,
        'created_at' => now(),
        'updated_at' => now(),
    ]);
    return redirect('/menu');
});
Route::post('/menu/beli/{id}', function ($id) {
    $menu = DB::table('menu')->where('id', $id)->first();
    if ($menu && $menu->stok > 0) {
        DB::table('menu')
            ->where('id', $id)
            ->update([
                'stok' => $menu->stok - 1,
                'updated_at' => now(),
            ]);
    }
    return redirect('/menu');
});
Route::get('/daftar_buku', [BooksController::class, 'index']);

Route::get('/template/index', [BooksController::class, 'template']);
Route::get('/template/create', [BooksController::class, 'create']);