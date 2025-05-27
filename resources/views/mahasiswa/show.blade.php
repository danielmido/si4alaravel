@extends('layout.main')

<!-- Sections Title-->
@section('title', 'Mahasiswa')

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
            <td colspan="2">
              <img src="{{ asset('images/' . $mahasiswa->foto) }}" alt="pp" class="img-fluid" width="240px">
            </td>
          </tr>
          <tr>
            <th>Nama</th>
            <td>{{ $mahasiswa->nama }}</td>
          </tr>
          <tr>
            <th>NPM</th>
            <td>{{ $mahasiswa->npm }}</td>
          </tr>
          <tr>
            <th>Jenis Kelamin</th>
            <td>{{ $mahasiswa->jk }}</td>
          </tr>
          <tr>
            <th>Tempat & Tanggal Lahir</th>
            <td>{{ $mahasiswa->tempat_lahir }}, {{ $mahasiswa->tanggal_lahir }}</td>
          </tr>
          <tr>
            <th>Asal SMA</th>
            <td>{{ $mahasiswa->asal_sma }}</td>
          </tr>
          <tr>
            <th>Program Studi</th>
            <td>{{ $mahasiswa->prodi->nama }}</td>
          </tr>
          <tr>
            <th>Fakultas</th>
            <td>{{ $mahasiswa->prodi->fakultas->nama }}</td>
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