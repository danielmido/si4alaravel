@extends('layout.main')

@section('title', 'Sesi')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-dark card-outline mb-4"> {{-- Changed from card-primary to card-dark --}}
            <div class="card-header">
                <div class="card-title">Ubah Sesi</div>
            </div>
            <form action="{{ route('sesi.update', $sesi->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Sesi</label> {{-- Added 'Nama' for clarity --}}
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') ? old('nama') : $sesi->nama }}">
                        @error('nama')
                        <div class="text-danger"> {{ $message}}</div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-dark">Edit</button> {{-- Changed from btn-primary to btn-dark --}}
                </div>
                </form>
            </div>
    </div>
</div>
@endsection