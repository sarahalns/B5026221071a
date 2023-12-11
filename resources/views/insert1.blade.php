@extends('master')

@section('title','Data Karyawan')

@section('konten')

	<h3>Data Karyawan</h3>


	<a href="/karyawan"> Kembali</a>

	<br/>
	<br/>

	<form action="/karyawan/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="kodepegawai" class="col-sm-2 col-form-label">ID</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="kodepegawai" name="kodepegawai" placeholder="Masukkan Kode Pegawai">
            </div>
        </div>

		<div class="form-group row">
            <label for="namalengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="namalengkap" name="namalengkap" placeholder="Masukkan Nama Lengkap">
            </div>
        </div>

		<div class="form-group row">
            <label for="divisi" class="col-sm-2 col-form-label">Divisi</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="divisi" name="divisi" placeholder="Masukkan Divisi">
            </div>
        </div>

		<div class="form-group row">
            <label for="departemen" class="col-sm-2 col-form-label">Departemen</label>
            <div class="col-sm-9">
            <input type="text" class="form-control" id="departemen" name="departemen" placeholder="Masukkan Depertemen">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-9 offset-xs-3">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>
	</form>

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
     @endif


@endsection

