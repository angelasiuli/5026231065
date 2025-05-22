<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index($nama){
        return $nama;
}


public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        $nrp = $request->input('nrp');
        return "Nama : " . $nama . "<br>Alamat : " . $alamat . "<br>NRP : " . $nrp;

    }

}
        // return "Nama : ".$nama.", "<br>" Alamat : ".$alamat. "Aslinya request";
