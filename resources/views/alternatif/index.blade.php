@extends('layouts.app')
  
@section('title', 'Home Alternatif')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Alternatif</h1>
        <a href="{{ route('alternatif.create')}}" class="btn btn-primary" style="background-color: #526D82">add Alternatif</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table text-white" style="background-color: #526D82">
            <tr>
                <th>No</th>
                <th>Kode Alternatif</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($alternatif->count() > 0)
                @foreach($alternatif as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->kode_alternatif }}</td>
                        <td class="align-middle">{{ $rs->nama}}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('alternatif.show', $rs->id) }}" type="button" class="btn text-white" style="background-color: rgb(82, 58, 216)">Detail</a>
                                <a href="{{ route('alternatif.edit', $rs->id) }}" type="button" class="btn text-white" style="background-color: rgb(92, 105, 188)">Edit</a>
                                <form action="{{ route('alternatif.destroy', $rs->id) }}" method="POST" type="button" class="btn p-0" style="background-color: burlywood" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach 
            @else
                <tr>
                    <td class="text-center" colspan="5">Alternatif not found</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection