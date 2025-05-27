@extends('layout.main')

<!-- Sections Title-->
@section('title', 'Prodi')

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
            <td>{{ $prodi->nama }}</td>
          </tr>
          <tr>
            <th>Singkatan</th>
            <td>{{ $prodi->singkatan }}</td>
          </tr>
          <tr>
            <th>Kaprodi</th>
            <td>{{ $prodi->kaprodi }}</td>
          </tr>
          <tr>
            <th>Sekretaris</th>
            <td>{{ $prodi->sekretaris }}</td>
          </tr>
          <tr>
            <th>Fakultas</th>
            <td>{{ $prodi->fakultas->nama }}</td>
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