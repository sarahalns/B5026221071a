<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaiController extends Controller{


public function nilai()
	{
    	// mengambil data dari table pegawai
		// $pegawai = DB::table('pegawai')->get();
        $nilaikuliah = DB::table('nilaikuliah')->get();

    	// mengirim data pegawai ke view index
		return view('nilaikuliah',['nilaikuliah' => $nilaikuliah]);
    }

    public function nilaitambah()
	{

		// memanggil view tambah
		return view('nilaitambah');

	}

    public function store(Request $request)
	{
		// insert data ke table pegawai
		DB::table('nilaikuliah')->insert([

			'NRP' => $request->NRP,
			'NilaiAngka' => $request->NilaiAngka,
			'SKS' => $request->SKS
		]);
		// alihkan halaman ke halaman pegawai
		return redirect('/nilaikuliah');

}
}
