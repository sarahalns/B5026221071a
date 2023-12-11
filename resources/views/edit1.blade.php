@extends('master')

@section('konten')

	<h3>Edit Lipstick</h3>

	<a href="/lipstick"> Kembali</a>

	<br/>
	<br/>

	@foreach($lipstick as $l)
	<form action="/lipstick/update" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <input type="hidden" name="id" value="{{ $l->kodelipstick }}">
                        <div class = "form-group">
                            <label for = "merklipstick" class = "col-sm-2 control-label">Merk</label>
                            <div class = "col-sm-10">
                                <input type="text" required="required" name="merklipstick" value="{{ $l->merklipstick }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "stocklipstick" class = "col-sm-2 control-label">Stock</label>
                            <div class = "col-sm-10">
                                <input type="number" required="required" name="stocklipstick" value="{{ $l->stocklipstick }}"
                                    class="form-control">
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for = "tersedia" class = "col-sm-2 control-label">Ketersediaan</label>
                            <div class = "col-sm-10">
                                <input type="Type" required="required" name="tersedia" value="{{ $l->tersedia }}"
                                    class="form-control">
                            </div>
                        </div>
        <br>

		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
@endsection

