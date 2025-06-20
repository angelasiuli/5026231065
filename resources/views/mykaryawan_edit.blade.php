@extends('template_tas')

@section('content')
<h3>Edit Karyawan</h3>
<form method="POST" action="/eas/update/{{ $karyawan->kodepegawai }}">
    @csrf
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Nama Lengkap</label>
        <div class="col-sm-10">
            <input type="text" name="namalengkap" class="form-control" value="{{ $karyawan->namalengkap }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Divisi</label>
        <div class="col-sm-10">
            <input type="text" name="divisi" class="form-control" value="{{ $karyawan->divisi }}">
        </div>
    </div>
    <div class="form-group row">
        <label class="col-sm-2 col-form-label">Departemen</label>
        <div class="col-sm-10">
            <input type="text" name="departemen" class="form-control" value="{{ $karyawan->departemen }}">
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    <a href="/eas" class="btn btn-secondary">Batal</a>
</form>
@endsection
