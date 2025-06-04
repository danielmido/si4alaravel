@extends('layout.main')
@section('title', 'Sesi')

@section('content')
<!--begin::Row-->
<div class="row">
  <div class="col-12">
    <!-- Default box -->
    <div class="card card-primary card-outline mb-4">
      <!--begin::Header-->
      <div class="card-header">
        <div class="card-title">Tambah Sesi</div>
      </div>
      <!--end::Header-->
      <!--begin::Form-->
      <form action="{{ route('sesi.store') }}" method="POST">
        @csrf
        <!-- @method('POST') -->
        <form>
          <!--begin::Body-->
          <div class="card-body">
            <div class="cold-md-6 md-3">
              <label for="nama" class="form-label">Sesi</label>
              <input type="text" class="form-control" name="nama" value="{{ old('nama') }}">
              @error('nama')
              <div class="text-danger"> {{ $message}}</div>
              @enderror
            </div>

          </div>
          <!--end::Body-->
          <!--begin::Footer-->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
          <!--end::Footer-->
        </form>
        <!--end::Form-->
    </div>
  </div>
</div>
<!--end::Row-->

@endsection