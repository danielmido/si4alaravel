@extends('layout.main')

<!-- Sections Title-->
@section('title', 'Fakultas')

<!-- Section isian -->
@section('content')
<!--begin::Row-->
<div class="row">
  <div class="col-12">
    <!-- Default box -->
    <div class="card">
      <div class="card-body">
        <table class="table">
          <tr>
            <th>Nama</th>
            <td>{{ $fakultas->nama }}</td>
          </tr>
          <tr>
            <th>Singkatan</th>
            <td>{{ $fakultas->singkatan }}</td>
          </tr>
          <tr>
            <th>Dekan</th>
            <td>{{ $fakultas->dekan }}</td>
          </tr>
          <tr>
            <th>Wakil Dekan</th>
            <td>{{ $fakultas->wakil_dekan }}</td>
          </tr>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!--end::Row-->
@endsection