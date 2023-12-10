@extends('master')

@section('title','Data Keranjang Belanja')

@section('konten')

	<h3>Keranjang Belanja</h3>

    <a href="/keranjangbelanja">Kembali</a>
	<br/>
	<br/>

	<form action="/keranjangbelanja/tambah" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="KodeBarang" class="col-sm-2 col-form-label">Kode Barang</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="KodeBarang" name="KodeBarang" placeholder="Masukkan Kode Barang">
            </div>
        </div>


        <div class="form-group row">
            <label for="Jumlah" class="col-sm-2 col-form-label">Jumlah Pembelian</label>
            <div class="col-xs-9">
            <input type="number" class="form-control" id="Jumlah" name="Jumlah" placeholder="Masukkan Jumlah Pembelian">
            </div>
        </div>

		<div class="form-group row">
            <label for="Harga" class="col-sm-2 col-form-label">Harga Per Item</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="Harga" name="Harga">
            </div>
        </div>


		<input type="submit" value="Masukkan Keranjang">
	</form>


@endsection

