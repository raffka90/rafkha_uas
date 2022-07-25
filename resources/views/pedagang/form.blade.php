@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Form Tambah Pedagang</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Form Tambah Pedagang</li>
            </ol>
        </div>
        </div>
    </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

    <!-- Default box -->
    <div class="card">
        <div class="card-header">

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
        <form method="POST" action="/pedagang/store">
            @csrf
                <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pedagang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="alamat">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">No Hp</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="nohp">
                </div>
                {{-- <div class="form-group">
                    <label for="exampleInputPassword1">Jenis Lapak</label>
                    <input type=text" class="form-control" id="exampleInputPassword1" name="alamat">
                </div> --}}


                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="/pedagang" class="btn btn-warning text-white">Batal</a>
                </div>
            </form>
    </div>
    <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
@endsection 