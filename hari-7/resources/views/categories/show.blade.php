@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Detail Kategori: {{ $category->name }}</h1>
    <hr>

    <h4>Daftar Produk</h4>
    @if($category->products->count() > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach($category->products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    <td>Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                    <td>{{ $product->stock }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Tidak ada produk dalam kategori ini.</p>
    @endif

    <a href="{{ route('categories.index') }}" class="btn btn-secondary">Kembali</a>
</div>
@endsection
