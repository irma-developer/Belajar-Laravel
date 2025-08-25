@extends('layouts.main')

@section('title', 'Edit Kategori')

@section('content')
<div class="card shadow">
  <div class="card-body">
    <h2 class="mb-4">Edit Kategori</h2>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="mb-3">
        <label class="form-label">Nama Kategori</label>
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" required>
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="{{ route('categories.index') }}" class="btn btn-secondary">Batal</a>
    </form>
  </div>
</div>
@endsection
