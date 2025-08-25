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
            'nilai' => 'nullable|numeric',
        ]);




        Siswa::create($request->all());


        return redirect('/siswa')->with('success', 'Data siswa berhasil ditambahkan.');
    }

    public function edit($id)
{
    $siswa = Siswa::findOrFail($id);
    return view('siswa.edit', compact('siswa'));
}

public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required',
        'kelas' => 'required',
        'alamat' => 'required',
        'nilai' => 'nullable|numeric',
    ]);

    $siswa = Siswa::findOrFail($id);
    $siswa->update($request->all());

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil diupdate.');
}

public function destroy($id)
{
    $siswa = Siswa::findOrFail($id);
    $siswa->delete();

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
}

}
