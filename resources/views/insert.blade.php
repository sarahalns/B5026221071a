@extends('master')

@section('title','Data Ketersediaan Lipstick')

@section('konten')

	<h3>Data lipstik</h3>

    <a href="/lipstick">Kembali</a>
	<br/>
	<br/>

	<form action="/lipstick/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="merklipstick" class="col-sm-2 col-form-label">Merk Lipstick</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="merklipstick" name="merklipstick" placeholder="Masukkan Merk Lipstick">
            </div>
        </div>


        <div class="form-group row">
            <label for="stocklipstick" class="col-sm-2 col-form-label">Stock</label>
            <div class="col-sm-6">
            <input type="number" class="form-control" id="stocklipstick" name="stocklipstick" placeholder="Masukkan Total Stock">
            </div>
        </div>

		<div class="form-group row">
            <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
            <div class="col-sm-6">
            <input type="text" class="form-control" id="tersedia" name="tersedia" placeholder="Ketik 'Y' apabila tersedia dan 'N' apabila tidak">
            </div>
        </div>

        <div class="form-group row">
            <div class="col-sm-9 offset-xs-3">
                <input type="submit" class="btn btn-primary" value="Simpan Data">
            </div>
        </div>

	</form>


@endsection

