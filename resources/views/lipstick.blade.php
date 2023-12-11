@extends('master')

@section('title', 'Data Ketersediaan Lipstick')

@section('konten')

    <h3>Data Ketersediaan Lipstick</h3>

    <a href="/lipstick/tambah" class="btn btn-primary"> + Tambah Lipstick</a>

    <br/>
    <p>Cari Data Lipstick berdasarkan merk:</p>
	<form action="/lipstick/cari" method="GET">
		<input class="form-control" type="text" name="cari" placeholder="Cari Merk Lipstick .." value="{{ old("cari", isset($cari) ? $cari : '') }}">
		<input class="btn btn-primary" type="submit" value="CARI">
	</form>
	<br/>

    <table class="table table-striped tabel-hover">
        <tr>
            <th>Kode Lipstick</th>
            <th>Merk</th>
            <th>Stock</th>
            <th>Ketersediaan</th>
            <th>Action</th>
        </tr>
        @foreach($lipstick as $l)
            <tr>
                <td>{{ $l->kodelipstick }}</td>
                <td>{{ $l->merklipstick }}</td>
                <td>{{ $l->stocklipstick }}</td>
                <td>{{ $l->tersedia }}</td>
                <td>
                    <a href="/lipstick/view/{{ $l->kodelipstick }}" class="btn btn-success">View</a>
                    |
                    <a href="/lipstick/edit/{{ $l->kodelipstick }}" class="btn btn-warning">Edit</a>
                    |
                    <a href="/lipstick/hapus/{{ $l->kodelipstick }}" class="btn btn-danger">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>

    {{-- {{$keranjangbelanja->links()}} --}}
@endsection
