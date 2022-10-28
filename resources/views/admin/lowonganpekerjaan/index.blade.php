@extends('admin.layouts.main')

@section('content')
    @if (session('success'))
        <div class="alert alert-success container container-fluid" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="container-fluid">
        <a href="/dashboard/lowonganpekerjaan/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
        <div class="table-responsive">
            <table class="table table-striped table-bordered" id="myTable">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pekerjaan</th>
                        <th>Perusahaan</th>
                        <th>Kategori</th>
                        <th>Tipe Pekerjaan</th>
                        <th>Deskripsi</th>
                        <th>Customer Service</th>
                        <th>Nomor Telepon</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lowongan as $lp)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $lp->nama_pekerjaan }}</td>
                            <td>{{ $lp->perusahaan }}</td>
                            <td>{{ $lp->kategori->nama_kategori }}</td>
                            <td>{{ $lp->tipe_pekerjaan }}</td>
                            <td>{{ $lp->deskripsi }}</td>
                            <td>{{ $lp->customer_service }}</td>
                            <td>{{ $lp->no_telp }}</td>
                            <td>
                                <a href="/dashboard/lowonganpekerjaan/{{ $lp->nama_pekerjaan }}/edit" class="btn btn-warning"><i
                                        data-feather="edit"></i></a>
                                <form action="/dashboard/lowonganpekerjaan/{{ $lp->nama_pekerjaan }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button href="/dashboard/lowonganpekerjaan/{{ strtolower($lp->nama_pekerjaan) }}" class="btn btn-danger"
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
