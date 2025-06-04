@extends('layout.main')
@section('title', 'Sesi')

@section('content')
<!--begin::Row-->
<div class="row">
  <div class="col-12">
    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">List Sesi</h3>
        <div class="card-tools">
          <button
            type="button"
            class="btn btn-tool"
            data-lte-toggle="card-collapse"
            title="Collapse">
            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i>
          </button>
          <button
            type="button"
            class="btn btn-tool"
            data-lte-toggle="card-remove"
            title="Remove">
            <i class="bi bi-x-lg"></i>
          </button>
        </div>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <a href="{{ route ('sesi.index')}}" class="btn btn-primary mb-3">Kembali</a>
          <table class="table table-bordered table-striped">
            <tbody>
              <tr>
                <th>Sesi</th>
                <td>{{ $sesi-> nama}}</td>
              </tr>
            </tbody>
          </table>
        </div>

      </div>
      <!-- /.card-body -->
      <!-- <div class="card-footer">Footer</div> -->
      <!-- /.card-footer-->
    </div>
    <!-- /.card -->
  </div>
</div>
<!--end::Row-->

@endsection