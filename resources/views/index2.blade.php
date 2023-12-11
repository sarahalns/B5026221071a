@extends('master')

@section('title','Data Karyawan')

@section('konten')


	<h3>Data Karyawan</h3>




	<table class="table table-striped tabel-hover">
		<tr>
			<th>ID</th>
			<th>Nama Lengkap</th>
			<th>Divisi</th>
			<th>Departemen</th>
            <th>Opsi</th>
		</tr>
		@foreach($karyawan as $y)
		<tr>
			<td>{{ $y->kodepegawai }}</td>
			<td>{{ strtoupper($y->namalengkap) }}</td>
			<td>{{ $y->divisi }}</td>
			<td>{{ strtolower($y->departemen)}}</td>
            <td>
				<a href="/karyawan/hapus/{{ $y->kodepegawai }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{-- {{$karyawan->links()}} --}}

    <a href="/karyawan/tambah" class="btn btn-primary"> + Tambah Karyawan Baru</a>
@endsection





