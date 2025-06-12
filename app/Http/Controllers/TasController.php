<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasController extends Controller
{
    // Menampilkan semua data tas
    public function index()
    {
        // $tas = DB::table('tas')->get();
        $tas = DB::table('tas')->paginate(5);
        return view('index_tas', ['tas' => $tas]);
    }

    // Menampilkan form tambah tas
    public function tambah()
    {
        return view('tambah_tas');
    }

    // Menyimpan data tas baru ke database
    public function store(Request $request)
    {
        DB::table('tas')->insert([
            'merktas' => $request->merktas,
            'hargatas' => $request->hargatas,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tas');
    }

    // Menampilkan form edit tas berdasarkan ID
    public function edit($id)
    {
        $tas = DB::table('tas')->where('ID', $id)->first();
        return view('edit_tas', ['tas' => $tas]);
    }

    // Mengupdate data tas
    public function update(Request $request)
    {
        DB::table('tas')->where('ID', $request->id)->update([
            'merktas' => $request->merktas,
            'hargatas' => $request->hargatas,
            'tersedia' => $request->tersedia,
            'berat' => $request->berat
        ]);

        return redirect('/tas');
    }

    // Menghapus data tas
    public function hapus($id)
    {
        DB::table('tas')->where('ID', $id)->delete();
        return redirect('/tas');
    }

    // Mencari data tas berdasarkan kata kunci
    public function cari(Request $request)
    {
        $cari = $request->cari;

        $tas = DB::table('tas')
            ->where('merktas', 'like', "%" . $cari . "%")
            ->orWhere('hargatas', 'like', "%" . $cari . "%")
            // ->get();
            ->paginate(5);

        return view('index_tas', ['tas' => $tas]);
    }
}
