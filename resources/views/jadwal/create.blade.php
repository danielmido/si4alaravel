@extends('layout.main')
@section('title', 'Jadwal')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-dark card-outline mb-4"> {{-- Changed from card-primary to card-dark --}}
            <div class="card-header">
                <div class="card-title">Tambah Jadwal</div>
            </div>
            <form action="{{ route('jadwal.store') }}" method="POST"> {{-- Removed redundant <form> tag and enctype as it's not needed for basic form inputs --}}
                @csrf
                <div class="card-body">
                    <div class="mb-3"> {{-- Adjusted to mb-3 for consistency --}}
                        <label for="tahun_akademik" class="form-label">Tahun Akademik</label>
                        <input type="text" class="form-control" name="tahun_akademik" value="{{ old('tahun_akademik') }}">
                        @error('tahun_akademik')
                        <div class="text-danger"> {{ $message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3"> {{-- Adjusted to mb-3 for consistency --}}
                        <label for="kode_smt" class="form-label">Kode Semester</label>
                        <input type="text" class="form-control" name="kode_smt" value="{{ old('kode_smt') }}">
                        @error('kode_smt')
                        <div class="text-danger"> {{ $message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3"> {{-- Adjusted to mb-3 for consistency --}}
                        <label for="kelas" class="form-label">Kelas</label>
                        <input type="text" class="form-control" name="kelas" value="{{ old('kelas') }}">
                        @error('kelas')
                        <div class="text-danger"> {{ $message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3"> {{-- Adjusted to mb-3 for consistency --}}
                        <label for="matakuliah_id" class="form-label">Matakuliah</label>
                        <select class="form-control" name="matakuliah_id">
                            @foreach ($matakuliah as $item)
                            <option value="{{ $item->id }}" {{ old('matakuliah_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('matakuliah_id')
                        <div class="text-danger"> {{ $message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3"> {{-- Adjusted to mb-3 for consistency --}}
                        <label for="dosen_id" class="form-label">Dosen</label>
                        <select class="form-control" name="dosen_id">
                            @foreach ($users as $item)
                            <option value="{{ $item->id }}" {{ old('dosen_id') == $item->id ? 'selected' : '' }}>{{ $item->name }}</option>
                            @endforeach
                        </select>
                        @error('dosen_id')
                        <div class="text-danger"> {{ $message}}</div>
                        @enderror
                    </div>
                    <div class="mb-3"> {{-- Adjusted to mb-3 for consistency --}}
                        <label for="sesi_id" class="form-label">Sesi Kuliah</label>
                        <select class="form-control" name="sesi_id">
                            @foreach ($sesi as $item)
                            <option value="{{ $item->id }}" {{ old('sesi_id') == $item->id ? 'selected' : '' }}>{{ $item->nama }}</option>
                            @endforeach
                        </select>
                        @error('sesi_id')
                        <div class="text-danger"> {{ $message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Tambah</button> {{-- Changed from btn-primary to btn-dark --}}
                </div>
                </form>
            </div>
    </div>
</div>
@endsection