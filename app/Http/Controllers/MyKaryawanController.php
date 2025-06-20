<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

Class MyKaryawanController extends Controller{

      public function index()
    {
        $karyawans = DB::table('mykaryawan')->get();
        return view('mykaryawan_index', compact('karyawans'));
    }

    public function view($kodepegawai)
    {
        $karyawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('mykaryawan_view', compact('karyawan'));
    }

    public function edit($kodepegawai)
    {
        $karyawan = DB::table('mykaryawan')->where('kodepegawai', $kodepegawai)->first();
        return view('mykaryawan_edit', compact('karyawan'));
    }

    public function update(Request $request, $kodepegawai)
    {
        DB::table('mykaryawan')
            ->where('kodepegawai', $kodepegawai)
            ->update([
                'namalengkap' => $request->namalengkap,
                'divisi' => $request->divisi,
                'departemen' => $request->departemen,
            ]);

        return redirect ('/eas')->with('success','Data berhasil diperbarui.');
}}
