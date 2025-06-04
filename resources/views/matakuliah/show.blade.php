@extends('layout.main')
@section('title', 'Matakuliah')

@section('content')
<!--begin::Row-->
<div class="row">
  <div class="col-12">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List Matakuliah</h3>
        <div class="card-tools">
          <button
            type="button"
            class="btn btn-tool"
            data-lte-toggle="card-collapse"
            title="Collapse">
            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
          </button>
          <button
            type="button"
            class="btn btn-tool"
            data-lte-toggle="card-remove"
            title="Remove">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <table class="table table-bordered table-striped">
          <tr>
            <th>Kode Mk</th>
            <td>{{ $matakuliah-> kode_mk}}</td>
          </tr>
          <tr>
            <th>Nama</th>
            <td>{{ $matakuliah-> nama}}</td>
          </tr>
          <tr>
            <th>Progam Studi</th>
            <td>{{ $matakuliah->prodi->nama}}</td>
          </tr>
        </table>
      </div>
      <!-- /.card-body -->
      <!-- <div class="card-footer">Footer</div> -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </div>
</div>
@endsection
<!--end::Row-->