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
        <a href="{{ route('prodi.create') }}" class="btn btn-dark mb-3"> Tambah </a>
        <table style="width: 100%; border-collapse: collapse;">
          <thead>
            <tr>
              <th style="padding: 8px; text-align: left;">Nama</th>
              <th style="padding: 8px; text-align: left;">Singkatan</th>
              <th style="padding: 8px; text-align: left;">Kaprodi</th>
              <th style="padding: 8px; text-align: left;">Sekretaris</th>
              <th style="padding: 8px; text-align: left;">Fakultas</th>
              <th style="padding: 8px; text-align: left;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($prodi as $item)
            <tr>
              <td style="padding: 8px;">{{$item->nama}}</td>
              <td style="padding: 8px;">{{$item->singkatan}}</td>
              <td style="padding: 8px;">{{$item->kaprodi}}</td>
              <td style="padding: 8px;">{{$item->sekretaris}}</td>
              <td style="padding: 8px;">{{$item->fakultas->nama}}</td>
              <td>
                <a href="{{ route('prodi.show', $item->id) }}" class="btn btn-dark mt-2">Show Details</a>
                <a href="{{ route('prodi.edit', $item->id) }}" class="btn btn-dark mt-2">Edit</a>
                <form action="{{ route('prodi.destroy', $item->id) }}" method="POST" class="d-inline">
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