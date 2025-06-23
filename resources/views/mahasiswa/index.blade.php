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
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-dark mb-3"> Tambah </a>
        <table style="width: 100%;">
          <thead>
            <tr>
              <th style="padding: 8px; text-align: left;">Foto</th>
              <th style="padding: 8px; text-align: left;">NPM</th>
              <th style="padding: 8px; text-align: left;">Nama</th>
              <th style="padding: 8px; text-align: left;">Jenis Kelamin</th>
              <th style="padding: 8px; text-align: left;">Prodi</th>
              <th style="padding: 8px; text-align: left;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswa as $item)
            <tr>
              <td style="padding: 8px;"><img src="{{ $item->foto }}" alt="pp" width="80px"></td>
              <td style="padding: 8px;">{{$item->npm}}</td>
              <td style="padding: 8px;">{{$item->nama}}</td>
              <td style="padding: 8px;">{{$item->jk}}</td>
              <td style="padding: 8px;">{{$item->prodi->nama}}</td>
              <td>
                <a href="{{ route('mahasiswa.show', $item->id) }}" class="btn btn-dark mt-2">Show Details</a>
                <a href="{{ route('mahasiswa.edit', $item->id) }}" class="btn btn-dark mt-2">Edit</a>
                <form action="{{ route('mahasiswa.destroy', $item->id) }}" method="POST" class="d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger show_confirm mt-2" data-lte-toggle="tooltip" title="Delete" data-nama="{{ $item->nama }}">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
</div>
<!--end::Row-->
@endsection