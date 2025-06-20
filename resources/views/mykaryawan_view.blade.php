@extends('template_tas')

@section('content')

<div class="container">
     <h3>Lihat Detail Karyawan</h3>
    <form>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Kode Pegawai</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="{{ $karyawan->kodepegawai }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="{{ ucwords(strtolower($karyawan->namalengkap)) }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="{{ $karyawan->divisi }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-10">
                <input type="text" readonly class="form-control" value="{{ $karyawan->departemen }}">
            </div>
        </div>
        <a href="/eas" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
