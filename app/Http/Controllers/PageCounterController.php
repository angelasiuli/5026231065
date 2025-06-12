<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageCounterController extends Controller
{
    public function index()
    {
        // Increment dulu jumlahnya
        DB::table('pagecounter')
            ->where('id', 1)
            ->increment('jumlah');

        // Ambil jumlah terbaru
        $jumlah = DB::table('pagecounter')
            ->where('id', 1)
            ->value('jumlah');

        // Kirim ke view
        return view('counter', ['jumlah' => $jumlah]);
    }
}
