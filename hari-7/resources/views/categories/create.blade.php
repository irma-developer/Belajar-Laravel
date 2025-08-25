@extends('layouts.main')

@section('title', 'Tambah Kategori')

@section('content')
<div class="card shadow">
  <div class="card-body">
    <h2 class="mb-4">Tambah Kategori</h2>

    <form action="{{ route('categories.store') }}" method="POST">
      @csrf
      <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input type="text" name="name" class="form-control" placeholder="Masukkan nama kategori" required>
      </div>
      <button type="submit" class="btn btn-success">Simpan</button>
      <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
