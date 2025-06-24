@extends('layout.main')
@section('title', 'Jadwal')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            {{-- Removed card-header tools for consistency with Fakultas show page --}}
            <div class="card-body">
                <table class="table"> {{-- Simpler table as in Fakultas show page --}}
                    <tbody>
                        <tr>
                            <th>Tahun Akademik</th>
                            <td>{{ $jadwal->tahun_akademik}}</td>
                        </tr>
                        <tr>
                            <th>Kode Semester</th>
                            <td>{{ $jadwal->kode_smt}}</td>
                        </tr>
                        <tr>
                            <th>Kelas</th>
                            <td>{{ $jadwal->kelas}}</td>
                        </tr>
                        <tr>
                            <th>Matakuliah</th>
                            <td>{{ $jadwal->matakuliah->nama}}</td>
                        </tr>
                        <tr>
                            <th>Dosen</th>
                            <td>{{ $jadwal->users->name}}</td>
                        </tr>
                        <tr>
                            <th>Sesi</th>
                            <td>{{ $jadwal->sesi->nama}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</div>
@endsection