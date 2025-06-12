@extends('template_tas')

@section('content')

<style>
    body {
        background-color: #ffffff; /* merah muda */
    }
    .tas-box {
        border: 2px solid #000000;
        padding: 20px;
        background-color: white;
        border-radius: 10px;
    }
    .tas-img {
        width: 150px;
        height: auto;
        border-radius: 8px;
    }
</style>

    <h3>Data Tas</h3>

    <a href="/tas/tambah" class="btn btn-warning mb-3"> + Tambah Tas Baru</a>

    <form action="/tas/cari" method="GET" class="form-inline">
        {{-- <label class="form-label">Cari Data Tas:   </label> --}}
        <input type="text" name="cari" placeholder="Cari Tas .." class="form-control">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Merk Tas</th>
            <th>Harga</th>
            <th>Tersedia</th>
            <th>Berat (kg)</th>
            <th>Opsi</th>
        </tr>
        @foreach ($tas as $t)
            <tr>
                <td>{{ $t->merktas }}</td>
                <td>{{ $t->hargatas }}</td>
                <td>{{ $t->tersedia ? 'Ya' : 'Tidak' }}</td>
                <td>{{ $t->berat }}</td>
                <td>
                    <a href="/tas/edit/{{ $t->ID }}" class="btn btn-success">Edit</a>
                    <a href="/tas/hapus/{{ $t->ID }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{ $tas->links() }} {{-- hanya bisa dipakai kalau pakai paginate --}}
@endsection
