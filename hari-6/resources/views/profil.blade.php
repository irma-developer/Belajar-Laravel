@extends('layouts.main') {{-- atau sesuaikan layout yang kamu pakai --}}

@section('content')
<div class="container">
    <h1>Profil Saya</h1>
    <p>Nama: {{ Auth::user()->name }}</p>
    <p>Email: {{ Auth::user()->email }}</p>
    {{-- Tambahkan detail lainnya jika perlu --}}
</div>
@endsection
