@extends('layout.main')

<!-- Sections Title-->
@section('title', 'Mata Kuliah')

<!-- Section isian -->
@section('content')
<!--begin::Row-->
<div class="row">
    <div class="col-12">
        <!-- Default box -->
        <div class="card">
            {{-- Removed card-header tools for consistency with Fakultas show page --}}
            <div class="card-body">
                <table class="table"> {{-- Simpler table as in Fakultas show page --}}
                    <tbody>
                        <tr>
                            <th>Kode MK</th>
                            <td>{{ $matakuliah-> kode_mk}}</td>
                        </tr>
                        <tr>
                            <th>Nama</th>
                            <td>{{ $matakuliah-> nama}}</td>
                        </tr>
                        <tr>
                            <th>Progam Studi</th>
                            <td>{{ $matakuliah->prodi->nama}}</td>
                        </tr>
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