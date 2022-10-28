@extends('admin.layouts.main')

@section('content')
    @if (session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container-fluid">
        <a href="/dashboard/toko/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Usaha</th>
                        <th>Owners</th>
                        <th>Images</th>
                        <th>No HP</th>
                        <th>Alamat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tokos as $toko)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $toko->nama }}</td>
                            <td>{{ $toko->pemilik }}</td>
                            <td><img width="70px" height="60px" src="{{ asset('storage/app/public/images/' . $toko->image) }}"></td>
                            <td>{{ $toko->no_hp }}</td>
                            <td>{{ $toko->alamat }}</td>
                            <td>
                                <a href="/dashboard/toko/{{ $toko->nama }}/edit" class="btn btn-warning"><i
                                        data-feather="edit"></i></a>
                                <form action="/dashboard/toko/{{ $toko->nama }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button href="/dashboard/toko/{{ strtolower($toko->nama) }}" class="btn btn-danger"
                                        type="submit" onclick="return confirm('Are you sure?')"><i
                                            data-feather="trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
