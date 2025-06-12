<!DOCTYPE html>
<html>

<head>
    <title>Edit Data Tas</title>
</head>

<body>

    <h2>Edit</h2>
    <h3>Edit Tas</h3>

    <a href="/tas">Kembali</a>
    <br /><br />

    {{-- @foreach ($tas as $t) --}}
        <form action="/tas/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $tas->ID }}"> <br />

    Merk Tas <input type="text" required="required" name="merktas" value="{{ $tas->merktas }}"> <br />
    Harga <input type="number" required="required" name="hargatas" value="{{ $tas->hargatas }}"> <br />
    Berat <input type="number" required="required" name="berat" value="{{ $tas->berat }}"> <br />
    Tersedia
    <textarea required="required" name="tersedia">{{ $tas->tersedia }}</textarea> <br />

    <input type="submit" value="Simpan Data">
</form>

    {{-- @endforeach --}}

</body>

</html>
