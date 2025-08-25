<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    // Menampilkan semua produk
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    // Simpan produk baru
    public function store(Request $request)
    {
        Produk::create($request->all());
        return redirect()->route('produk.index');
    }
}
