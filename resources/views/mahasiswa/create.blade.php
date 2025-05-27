@extends('layout.main')

<!-- Sections Title-->
@section('title', 'Mahasiswa')

<!-- Section isian -->
@section('content')
<!--begin::Row-->
<div class="row">
  <div class="col-12">
    <div class="card card-dark card-outline mb-4">
      <!--begin::Header-->
      <div class="card-header">
        <div class="card-title">Tambah Mahasiswa</div>
      </div>
      <!--end::Header-->
      <!--begin::Form-->
      <form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!--begin::Body-->
        <div class="card-body">
          <div class="mb-3">
            <label for="npm" class="form-label">NPM</label>
            <input type="text" class="form-control" name="npm" value="{{ old('npm') }}">
            @error('npm')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
            @error('nama')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="jk" class="form-label">Jenis Kelamin:</label>
            <input type="radio" name="jk" value="L" {{ old('jk') == 'L' ? 'checked' : '' }}> Laki-laki
            <input type="radio" name="jk" value="P" {{ old('jk') == 'P' ? 'checked' : '' }}> Perempuan
            @error('jk')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}">
            @error('tanggal_lahir')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir" value="{{ old('tempat_lahir') }}">
            @error('tempat_lahir')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <div class="mb-3">
            <label for="asal_sma" class="form-label">SMA Asal</label>
            <input type="text" class="form-control" name="asal_sma" value="{{ old('asal_sma') }}">
            @error('asal_sma')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <!-- prodi_id, foreign key -->
          <div class="mb-3">
            <label for="prodi_id" class="form-label">Prodi</label>
            <select name="prodi_id" class="form-select">
              @foreach($prodi as $item)
                <option value="{{ $item->id }}">{{ $item->nama }}</option>
              @endforeach
            </select>
            @error('prodi_id')
              <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <!-- Upload foto -->
          <div class="mb-3">
            <label for="foto" class="form-label">Foto</label>
            <input type="file" class="form-control" name="foto">
            @error('foto')
            <div class="text-danger">{{ $message }}</div>
            @enderror
          </div>
          <!-- Button, untuk submit data -->
          <button type="submit" class="btn btn-dark"> Tambah </button>
        </div>
        <!--end::Body-->
      </form>
      <!--end::Form-->
    </div>
  </div>
</div>
<!--end::Row-->
@endsection