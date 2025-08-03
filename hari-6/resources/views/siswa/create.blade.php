@extends('layouts.main')

@section('content')
    <h1 class="h3 mb-4 text-gray-800">Tambah Siswa</h1>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control">
        </div>

        <div class="form-group">
            <label>Kelas:</label>
            <input type="text" name="kelas" class="form-control">
        </div>

        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
