@extends('layout.main')

@section('title', 'Sesi')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-dark card-outline mb-4"> {{-- Changed from card-primary to card-dark --}}
            <div class="card-header">
                <div class="card-title">Tambah Sesi</div>
            </div>
            <form action="{{ route('sesi.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="mb-3"> {{-- Changed from cold-md-6 md-3 to mb-3 for consistency --}}
                        <label for="nama" class="form-label">Nama Sesi</label> {{-- Added 'Nama' for clarity --}}
                        <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
                        @error('nama')
                        <div class="text-danger"> {{ $message }}</div>
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