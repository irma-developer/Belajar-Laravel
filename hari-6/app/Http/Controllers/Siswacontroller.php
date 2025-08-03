<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class SiswaController extends Controller
{
    // Tampilkan semua siswa
    public function index()
    {
        $siswa = Siswa::all(); // Ambil semua data siswa
        return view('siswa.index', compact('siswa')); // Kirim ke view siswa/index.blade.php
    }

    // Tampilkan form tambah siswa
    public function create()
    {
        return view('siswa.create');
    }

    // Simpan data siswa baru
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
        ]);

        Siswa::create($request->all());

        return redirect('/siswa')->with('success', 'Data siswa berhasil ditambahkan.');
    }
}
