@extends('template_tas')

@section('content')

<h3>Data Keranjang Belanja</h3>
<a href="/keranjangbelanja/beli" class="btn btn-primary">Beli</a>
<br><br>

<table class="table table-striped table-hover">
    <tr>
        <th>Kode Pembelian</th>
        <th>Kode Barang</th>
        <th>Jumlah Pembelian</th>
        <th>Harga per Item</th>
        <th>Total</th>
        <th>Action</th>
    </tr>

    @foreach($keranjangbelanja as $k)
    <tr>
        <td>{{ $k->KodeBarang }}</td>
        <td>{{ $k->Jumlah }}</td>
        <td>{{ $k->Harga }}</td>
        <td>{{ number_format($k->Harga, 0, ',', '.') }}</td>
        <td>{{ number_format($k->Jumlah * $k->Harga, 0, ',', '.') }}</td>
        <td>
            <a href="/keranjangbelanja/batal/{{ $k->KodeBarang }}" class="btn btn-danger">Batal</a>
        </td>
    </tr>
    @endforeach
</table>

@endsection
