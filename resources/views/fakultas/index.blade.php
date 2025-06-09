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
        @can('create', App\Models\Fakultas::class)
        <a href="{{ route('fakultas.create') }}" class="btn btn-dark mb-3"> Tambah </a>
        @endcan
        <table style="width: 100%;">
          <thead>
            <tr>
              <th style="padding: 8px; text-align: left;">Nama</th>
              <th style="padding: 8px; text-align: left;">Singkatan</th>
              <th style="padding: 8px; text-align: left;">Dekan</th>
              <th style="padding: 8px; text-align: left;">Wakil Dekan</th>
              <th style="padding: 8px; text-align: left;">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($fakultas as $item)
            <tr>
              <td style="padding: 8px;">{{$item->nama}}</td>
              <td style="padding: 8px;">{{$item->singkatan}}</td>
              <td style="padding: 8px;">{{$item->dekan}}</td>
              <td style="padding: 8px;">{{$item->wakil_dekan}}</td>
              <td>
                <a href="{{ route('fakultas.show', $item->id) }}" class="btn btn-dark mt-2">Show Details</a>
                @can('update', $item)
                <a href="{{ route('fakultas.edit', $item->id) }}" class="btn btn-dark mt-2">Edit</a>
                @endcan
                @can('delete', $item)
                <form action="{{ route('fakultas.destroy', $item->id) }}" method="POST" class="d-inline">
                  @csrf 
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger show_confirm mt-2" data-lte-toggle="tooltip" title="Delete" data-nama="{{ $item->nama }}">Delete</button>
                </form>
                @endcan
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