@extends('layout.main')
@section('title', 'Jadwal')

@section('content')
<!--begin::Row-->
<div class="row">
  <div class="col-12">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List Jadwal</h3>
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
        <div class="table-responsive">
          <a href="{{ route ('jadwal.index')}}" class="btn btn-primary mb-3">Kembali</a>
          <table class="table table-bordered table-striped">
            <tr>
              <th>Tahun Akademik</th>
              <td>{{ $jadwal-> tahun_akademik}}</td>
            </tr>
            <tr>
              <th>kode Semester</th>
              <td>{{ $jadwal-> kode_smt}}</td>
            </tr>
            <tr>
              <th>Matakuliah</th>
              <td>{{ $jadwal->matakuliah->nama}}</td>
            </tr>
            <tr>
              <th>Dosen</th>
              <td>{{ $jadwal->users->name}}</td>
            </tr>
            <tr>
              <th>Sesi</th>
              <td>{{ $jadwal->sesi->nama}}</td>
            </tr>
          </table>
        </div>
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