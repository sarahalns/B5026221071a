@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h3>Data Pegawai</h3>

	<a href="/nilaikuliah/nilaitambah" class="btn btn-primary"> + Tambah Nilai Baru</a>

	<br/>

	<br/>



	<table class="table table-striped table-hover">
		<tr>
			<th>ID</th>
			<th>NRP</th>
			<th>Nilai</th>
			<th>SKS</th>
            <th>Nilai Huruf</th>
			<th>Bobot</th>
		</tr>
		@foreach($nilaikuliah as $n)
		<tr>
			<td>{{ $n->ID }}</td>
			<td>{{ $n->NRP }}</td>
			<td>{{ $n->NilaiAngka }}</td>
			<td>{{ $n->SKS }}</td>
            <td>
                @php
                $nilaiAngka = $n->NilaiAngka;
                $nilaiHuruf = '';

                if ($nilaiAngka <= 40) {
                    $nilaiHuruf = 'D';
                } elseif ($nilaiAngka <= 60) {
                    $nilaiHuruf = 'C';
                } elseif ($nilaiAngka <= 80) {
                    $nilaiHuruf = 'B';
                } else {
                    $nilaiHuruf = 'A';
                }
                echo $nilaiHuruf;
                @endphp
            </td>
			<td>{{ $n->NilaiAngka * $n->SKS }}</td>

		</tr>
		@endforeach
	</table>
@endsection

@php
function getNilaiHuruf($NilaiHuruf)
{
    if ($nilaiAngka <= 40) {
        return 'D';
    } elseif ($nilaiAngka <= 60) {
        return 'C';
    } elseif ($nilaiAngka <= 80) {
        return 'B';
    } else {
        return 'A';
    }
}
@endphp
