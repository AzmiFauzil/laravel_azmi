<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Books::all();
        return view('daftar_buku', compact('books'));
    }

    public function template()
    {
        return view('template.main');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambah_buku');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
            'jumlah_halaman' => 'required|integer',
        ]);

        Books::create($request->all());
        return redirect('/books')->with('success', 'Buku berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $books = Books::findOrFail($id);
        return view('edit_buku', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'judul' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer',
            'jumlah_halaman' => 'required|integer',
        ]);

        $books = Books::findOrFail($id);
        $books->update($request->all());
        return redirect('/books')->with('success', 'Buku berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Books::findOrFail($id);
        $books->delete();
        return redirect('/books')->with('success', 'Buku berhasil dihapus!');
    }
}
