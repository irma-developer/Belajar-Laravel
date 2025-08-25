@extends('layouts.main')

@section('content')
    <div class="container mt-3">
        <h2>Data Guru</h2>
        <a href="{{ route('guru.create') }}" class="btn btn-primary mb-3">Tambah Guru</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIP</th>
                    <th>Mapel</th>
                </tr>
            </thead>
            <tbody>
                @foreach($gurus as $guru)
                    <tr>
                        <td>{{ $guru->nama }}</td>
                        <td>{{ $guru->nip }}</td>
                        <td>{{ $guru->mapel }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
