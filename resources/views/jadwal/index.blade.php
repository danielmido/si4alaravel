@extends('layout.main')
@section('title', 'Jadwal')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- Removed card-header tools for consistency with Fakultas list page --}}
            <div class="card-body">
                <a href="{{ route ('jadwal.create')}}" class="btn btn-dark mb-3"> Tambah </a> {{-- Changed from btn-primary to btn-dark --}}
                <table style="width: 100%;"> {{-- Consistent with Fakultas table styling --}}
                    <thead>
                        <tr>
                            <th style="padding: 8px; text-align: left;">Tahun Akademik</th>
                            <th style="padding: 8px; text-align: left;">Kode Semester</th>
                            <th style="padding: 8px; text-align: left;">Kelas</th>
                            <th style="padding: 8px; text-align: left;">Matakuliah</th>
                            <th style="padding: 8px; text-align: left;">Dosen</th>
                            <th style="padding: 8px; text-align: left;">Sesi</th>
                            <th style="padding: 8px; text-align: left;">Aksi</th> {{-- Added Aksi column for consistency --}}
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jadwal as $item)
                        <tr>
                            <td style="padding: 8px;">{{ $item->tahun_akademik }}</td>
                            <td style="padding: 8px;">{{ $item->kode_smt }}</td>
                            <td style="padding: 8px;">{{ $item->kelas }}</td>
                            <td style="padding: 8px;">{{ $item->matakuliah->nama }}</td>
                            <td style="padding: 8px;">{{ $item->users->name }}</td>
                            <td style="padding: 8px;">{{ $item->sesi->nama }}</td>
                            <td>
                                <a href="{{ route('jadwal.show', $item->id) }}" class="btn btn-dark mt-2">Show Details</a> {{-- Consistent button style --}}
                                <a href="{{ route('jadwal.edit', $item->id) }}" class="btn btn-dark mt-2">Edit</a> {{-- Consistent button style --}}
                                <form action="{{ route('jadwal.destroy', $item->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger show_confirm mt-2" data-lte-toggle="tooltip" title="Delete" data-nama="Jadwal {{ $item->tahun_akademik }} - {{ $item->matakuliah->nama }}">Delete</button> {{-- Adjusted data-nama for clarity --}}
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</div>
@endsection