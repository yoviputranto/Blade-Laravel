@extends('adminlte.master')

@section('content')
    <div class="ml-3 mt-3 mr-2">
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Form Pertanyaan</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="/pertanyaan" method="POST">
            <div class="card-body">
                <div class="form-group">
                <label for="judul">Judul</label>
                <input type="text" class="form-control" id="judul" placeholder="Masukkan Judul">
                </div>
                <div class="form-group">
                <label for="isi">Isi</label>
                <input type="text" class="form-control" id="isi" placeholder="Isi">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
@endsection