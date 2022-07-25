@extends('layouts.master')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1>Data lapak</h1>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Lapak</li>
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
        <a href="/lapak/form" class="btn btn-primary">Tambah lapak</a>

        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
            </button>
        </div>
        </div>
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                    <tr>
                    <th>NO</th>
                    <th>Jenis</th>
                    {{-- <th>Alamat</th>
                    <th>No Hp</th> --}}
                    <th>ACTION</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($lapak as $item)
                    <tr>
                        <td>{{$nomor++}}</td>
                        <td>{{$item->no}}</td>
                        <td>{{$item->jenis}}</td>
                        {{-- <td>{{$item->nohp}}</td> --}}
                        <td>
                            <a href="/" class="btn btn-info btn-sm">edit</a>
                            <a href="/" class="btn btn-danger btn-sm">hapus</a>
                        </td>
                    </tr>
                    @empty
                        <tr>
                            <td colspan="4">Belum Ada Data</td>
                        </tr>
                    @endforelse

                </tbody>
                </table>
            </div>
        <!-- /.card-body -->

        <!-- /.card-footer-->
    </div>
    <!-- /.card -->

    </section>
    <!-- /.content -->
</div>
@endsection