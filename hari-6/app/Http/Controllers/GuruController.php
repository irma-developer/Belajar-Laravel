<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $gurus = Guru::all();
        return view('guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('guru.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'nip' => 'nullable',
            'mapel' => 'required',
        ]);

        Guru::create($request->only(['nama', 'nip', 'mapel']));

        return redirect()->route('guru.index')->with('success', 'Data guru berhasil ditambahkan!');
    }

    
}
