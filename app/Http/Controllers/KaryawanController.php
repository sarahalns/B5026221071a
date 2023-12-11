<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KaryawanController extends Controller
{
    public function index2()
	{
        $karyawan = DB::table('karyawan') ->get();


    	// mengirim data pegawai ke view index
		return view('index2',['karyawan' => $karyawan]);

	}


	public function tambah1()
	{

		// memanggil view tambah
		return view('insert1');

	}


	// public function store(Request $request)
	// {
	// 	// insert data ke table pegawai
	// 	DB::table('karyawan')->insert([
	// 		'kodepegawai' => $request->kodepegawai,
	// 		'namalengkap' => $request->namalengkap,
	// 		'divisi' => $request->divisi,
	// 		'departemen' => $request->departemen
	// 	]);
	// 	// alihkan halaman ke halaman karryaawan
	// 	return redirect('/karyawan');

	// }



	public function hapus($id)
	{
		// menghapus data pegawai berdasarkan id yang dipilih
		DB::table('karyawan')->where('kodepegawai',$id)->delete();

		// alihkan halaman ke halaman pegawai
		return redirect('/karyawan');
	}

    public function store(Request $request)
    {
    $kodepegawai = $request->input('kodepegawai');

    // Melakukan pencarian karyawan berdasarkan kodepegawai
    $karyawan = DB::table('karyawan')->where('kodepegawai', $kodepegawai)->first();

    if ($karyawan) {
        // Jika kode pegawai sudah ada di tabel, kembalikan dengan pesan kesalahan
        return redirect()->back()->with('error', 'Kode Pegawai sudah ada di tabel!');
    } else {
        // Jika kode pegawai belum ada, lakukan penyimpanan data
        DB::table('karyawan')->insert([
            'kodepegawai' => $kodepegawai,
            'namalengkap' => $request->input('namalengkap'),
            'divisi' => $request->input('divisi'),
            'departemen' => $request->input('departemen'),
            // Sesuaikan dengan kolom-kolom dan nilai-nilai yang benar dalam tabel 'karyawan'
        ]);

        // Berikan pesan sukses atau lakukan tindakan lainnya setelah penyimpanan berhasil
        return redirect('karyawan');
        }
    }
}







