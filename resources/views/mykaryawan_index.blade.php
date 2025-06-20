@extends('template_tas')

@section('content')

<div class="container">
    <h3>Daftar Karyawan</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Pegawai</th>
                <th>Nama Lengkap</th>
                <th>Divisi</th>
                <th>Departemen</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($karyawans as $k)
            <tr>
                <td>{{ $k->kodepegawai }}</td>
                <td>{{ ucwords(strtolower($k->namalengkap)) }}</td>
                <td>{{ $k->divisi }}</td>
                <td>{{ $k->departemen }}</td>
                <td>
                    <a href="/eas/view/{{ $k->kodepegawai }}" class="btn btn-info btn-sm">View</a>
                    <a href="/eas/edit/{{ $k->kodepegawai }}" class="btn btn-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
