@extends('layouts.main')

@section('content')
    <h1 class="mb-4">Data Siswa</h1>
    <a href="/siswa/create" class="btn btn-primary mb-3">Tambah Siswa</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Alamat</th>
                <th>Nilai</th>
                <th>Keterangan</th> {{-- Tambahkan kolom keterangan --}}
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $s)
                <tr>
                    <td>{{ $s->nama }}</td>
                    <td>{{ $s->kelas }}</td>
                    <td>{{ $s->alamat }}</td>
                    <td>{{ $s->nilai }}</td>
                    <td>
                        @if ($s->nilai >= 75)
                            <span class="badge bg-success">Lulus</span>
                        @else
                            <span class="badge bg-danger">Mengulang</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('siswa.edit', $s->id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                        <form action="{{ route('siswa.destroy', $s->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
