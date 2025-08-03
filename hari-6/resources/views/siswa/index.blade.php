@extends('layouts.main')

@section('content')
    <h1 class="mb-4">Data Siswa</h1>
    <a href="/siswa/create" class="btn btn-primary mb-3">Tambah Siswa</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach($siswa as $s)
            <tr>
                <td>{{ $s->nama }}</td>
                <td>{{ $s->kelas }}</td>
                <td>{{ $s->alamat }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
