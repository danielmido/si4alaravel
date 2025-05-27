@extends('layout.main')

<!-- Sections Title-->
@section('title', 'Fakultas')

<!-- Section isian -->
@section('content')
<!--begin::Row-->
<div class="row">
  <div class="col-12">
    <div class="card card-dark card-outline mb-4">
      <!--begin::Header-->
      <div class="card-header">
        <div class="card-title">Edit Fakultas</div>
      </div>
      <!--end::Header-->
      <!--begin::Form-->
      <form action="{{ route('fakultas.update', $fakultas->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!--begin::Body-->
        <div class="card-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Fakultas</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama') ? old('nama') : $fakultas->nama }}">
            @error('nama')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="singkatan" class="form-label">Singkatan</label>
            <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') ? old('singkatan') : $fakultas->singkatan }}">
            @error('singkatan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="dekan" class="form-label">Nama Dekan</label>
            <input type="text" class="form-control" name="dekan" value="{{ old('dekan') ? old('dekan') : $fakultas->dekan }}">
            @error('dekan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="wakil_dekan" class="form-label">Nama Wakil Dekan</label>
            <input type="text" class="form-control" name="wakil_dekan" value="{{ old('wakil_dekan') ? old('wakil_dekan') : $fakultas->wakil_dekan }}">
            @error('wakil_dekan')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <button type="submit" class="btn btn-dark"> Edit </button>
        </div>
        <!--end::Body-->
      </form>
      <!--end::Form-->
    </div>
  </div>
</div>
<!--end::Row-->
@endsection