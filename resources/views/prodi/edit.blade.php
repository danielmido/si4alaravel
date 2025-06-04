@extends('layout.main')

<!-- Sections Title-->
@section('title', 'Program Studi')

<!-- Section isian -->
@section('content')
<!--begin::Row-->
<div class="row">
  <div class="col-12">
    <div class="card card-dark card-outline mb-4">
      <!--begin::Header-->
      <div class="card-header">
        <div class="card-title">Edit Program Studi</div>
      </div>
      <!--end::Header-->
      <!--begin::Form-->
      <form action="{{ route('prodi.update', $prodi->id) }}" method="POST">
        @csrf
        @method('PUT')
        <!--begin::Body-->
        <div class="card-body">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Program Studi</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama') ? old('nama') : $prodi->nama }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="singkatan" class="form-label">Singkatan</label>
            <input type="text" class="form-control" name="singkatan" value="{{ old('singkatan') ? old('singkatan') : $prodi->singkatan }}">
            @error('singkatan')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="kaprodi" class="form-label">Nama Kaprodi</label>
            <input type="text" class="form-control" name="kaprodi" value="{{ old('kaprodi') ? old('kaprodi') : $prodi->kaprodi }}">
            @error('kaprodi')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="sekretaris" class="form-label">Nama Sekretaris</label>
            <input type="text" class="form-control" name="sekretaris" value="{{ old('sekretaris') ? old('sekretaris') : $prodi->sekretaris }}">
            @error('sekretaris')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <!-- fakultas_id, foreign key -->
          <div class="mb-3">
            <label for="fakultas_id" class="form-label">Fakultas</label>
            <select name="fakultas_id" class="form-select">
              @foreach($fakultas as $item)
              <option value="{{ $item->id }}" {{ old('fakultas_id') == $item->id ? 'selected' : ($prodi->fakultas_id == $item->id ? 'selected' : null) }}>{{ $item->nama }}</option>
              @endforeach
            </select>
            @error('fakultas_id')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <!-- Button, tombol untuk submit data -->
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