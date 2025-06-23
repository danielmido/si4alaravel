@extends('layout.main')

@section('title', 'Sesi')

@section('content')
<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-body">
        <a href="{{ route('sesi.create')}}" class="btn btn-dark mb-3"> Tambah </a> {{-- Changed from btn-primary to btn-dark, and reordered --}}
        <table style="width: 100%;"> {{-- Consistent with Fakultas table styling --}}
          <thead>
            <tr>
              <th style="padding: 8px; text-align: left;">Sesi</th> {{-- Consistent header style --}}
              <th style="padding: 8px; text-align: left;">Aksi</th> {{-- Added Aksi column for consistency --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($sesi as $item)
            <tr>
              <td style="padding: 8px;">{{ $item->nama }}</td> {{-- Consistent cell padding --}}
              <td>
                <a href="{{ route('sesi.show', $item->id) }}" class="btn btn-dark mt-2">Show Details</a> {{-- Consistent button style --}}
                <a href="{{ route('sesi.edit', $item->id) }}" class="btn btn-dark mt-2">Edit</a> {{-- Consistent button style --}}
                <form action="{{ route('sesi.destroy', $item->id) }}" method="post" class="d-inline">
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
    </div>
  </div>
</div>
@endsection