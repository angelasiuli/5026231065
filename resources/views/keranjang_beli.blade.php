<h3>Tambah Data Belanja</h3>

<form action="/keranjangbelanja/store" method="POST">
    @csrf
    <input type="text" name="KodeBarang" placeholder="Kode Barang" required>
    <input type="number" name="Jumlah" placeholder="Jumlah" required>
    <input type="number" name="Harga" placeholder="Harga" required>
    <button type="submit">Simpan</button>
</form>

<a href="/" class="btn btn-secondary">Kembali</a>
