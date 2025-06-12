@extends('template_tas')

@section('content')
<div class="container mb-5">
    <h3>Data Tas</h3>

    <a href="/tas">Kembali</a>
    <br /><br />

    <form action="/tas/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Merk Tas</label>
            </div>
            <div class="col-6">
                <input type="text" name="merktas" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Harga Tas</label>
            </div>
            <div class="col-6">
                <input type="number" name="hargatas" required="required" class="form-control">
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Tersedia</label>
            </div>
            <div class="col-6">
                <input type="radio" name="tersedia" value="1" checked> Ya
                <input type="radio" name="tersedia" value="0"> Tidak
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label">Berat (kg)</label>
            </div>
            <div class="col-6">
                <input type="number" step="0.01" name="berat" required="required" class="form-control">
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>
</div>

@endsection
