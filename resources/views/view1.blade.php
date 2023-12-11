@extends('master')

@section('konten')

    <h3>View Lipstick</h3>

    <a href="/pegawai">Kembali</a>

    <br />
    <br />
    <div class="row">
        <div class="col-1"></div>
        <div class="col-3">
            <div class="card" style="width:200px; margin-top: 50px;">
                <img src="{{ asset('img/lipstick.jpg') }}">
            </div>
        </div>
        <div class="col-8">
            @foreach ($lipstick as $l)
                <fieldset disabled>
                    <form action="/lipstick/update" method="post" class="form-horizontal" role="form">
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
                    </form>
                </fieldset>
            @endforeach
            <div class="row">
                <div class="col-10 text-center">
                    <a href="/lipstick" class="btn btn-primary w-25 p-2">OK</a>
                </div>
                <div class="col-2"></div>
            </div>
        </div>
    </div>
@endsection
