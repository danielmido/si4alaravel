@extends('layout.main')

@section('title', 'Sesi')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <table class="table"> {{-- Simpler table as in Fakultas show page --}}
                    <tbody>
                        <tr>
                            <th>Sesi</th>
                            <td>{{ $sesi->nama }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
</div>
@endsection