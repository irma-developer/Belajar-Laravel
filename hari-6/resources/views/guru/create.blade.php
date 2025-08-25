@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <h2>Tambah Data Guru</h2>

        <form action="{{ route('guru.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>NIP</label>
                <input type="text" name="nip" class="form-control">
            </div>
            <div class="mb-3">
                <label>Mata Pelajaran</label>
                <input type="text" name="mapel" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
        </form>
    </div>
@endsection
