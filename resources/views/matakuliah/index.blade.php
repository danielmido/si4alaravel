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
            {{-- Removed card-header tools for consistency with Fakultas list page --}}
            <div class="card-body">
                <a href="{{ route ('matakuliah.create')}}" class="btn btn-dark mb-3"> Tambah </a> {{-- Changed from btn-primary to btn-dark --}}
                <table style="width: 100%;"> {{-- Consistent with Fakultas table styling --}}
                    <thead>
                        <tr>
                            <th style="padding: 8px; text-align: left;">Kode MK</th>
                            <th style="padding: 8px; text-align: left;">Nama</th>
                            <th style="padding: 8px; text-align: left;">Prodi</th>
                            <th style="padding: 8px; text-align: left;">Aksi</th> {{-- Added Aksi column for consistency --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($matakuliah as $item)
                        <tr>
                            <td style="padding: 8px;">{{ $item->kode_mk }}</td>
                            <td style="padding: 8px;">{{ $item->nama }}</td>
                            <td style="padding: 8px;">{{ $item->prodi->nama }}</td>
                            <td>
                                <a href="{{ route('matakuliah.show', $item->id) }}" class="btn btn-dark mt-2">Show Details</a> {{-- Consistent button style --}}
                                <a href="{{ route('matakuliah.edit', $item->id) }}" class="btn btn-dark mt-2">Edit</a> {{-- Consistent button style --}}
                                <form action="{{ route('matakuliah.destroy', $item->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger show_confirm mt-2" data-lte-toggle="tooltip" title="Delete" data-nama="{{$item->nama}}">Delete</button>
                                </form>
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