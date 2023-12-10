@extends('master')

@section('title')

@section('konten')

	<h3>Data Keranjang Belanja</h3>

	<a href="/keranjangbelanja/beli" class="btn btn-primary">Beli</a>



	{{-- <br/>
    <p>Cari Data Pegawai berdasarkan nama:</p>
	<form action="/pegawai/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/> --}}

	<table class="table table-striped tabel-hover">
		<tr>
			<th>Kode Pembelian</th>
			<th>Kode Barang</th>
			<th>Jumlah Pembelian</th>
			<th>Harga Per Item</th>
            <th>Total</th>
            <th>Action</th>
		</tr>
		@foreach($keranjangbelanja as $k)
		<tr>
			<td>{{ $k->ID }}</td>
			<td>{{ $k->KodeBarang }}</td>
			<td>{{ $k->Jumlah }}</td>
			<td>{{ number_format($k->Harga) }}</td>
            <td>{{ number_format($k->Jumlah * $k->Harga)  }}</td>


            <td>
                <a href="/keranjangbelanja/batal/{{ $k->ID }}" class="btn btn-danger">Batal</a>
            </td>


			{{-- <td>
                <a href="/pegawai/show/{{ $p->pegawai_id }}" class="btn btn-success">View</a>
                |
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger">Hapus</a>
			</td> --}}
		</tr>
		@endforeach
	</table>
    {{-- {{$keranjangbelanja->links()}} --}}
@endsection





