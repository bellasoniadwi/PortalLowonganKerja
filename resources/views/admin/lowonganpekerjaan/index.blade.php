@extends('newlayouts.main')

@section('lowonganpekerjaan', 'active')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i>    Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('lowonganpekerjaan.index') }}"><i class="far fa-file"></i>    Lowongan Pekerjaan</a></div>
        </div>
    </div>

    <div class="section-body">
        <p class="section-lead">
            @if (session('success'))
                <div class="alert alert-success alert-has-icon">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Success</div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    @cannot('admin')
                    <div class="card-header">
                        <h4>List Lowongan Pekerjaan Yang Anda Kelola</h4>
                    </div>
                    @endcannot
                    @can('admin')
                        <div class="card-header">
                            <h4>List Seluruh Lowongan Pekerjaan</h4>
                        </div>
                    @endcan
                    <div class="card-body">
                        <a href="/dashboard/lowonganpekerjaan/create" class="btn btn-primary"> + Tambah </a>
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Pekerjaan</th>
                                        <th>Perusahaan</th>
                                        <th>Kategori</th>
                                        <th>Tipe Pekerjaan</th>
                                        <th>Deskripsi</th>
                                        <th>Contact Person</th>
                                        <th>Nomor Telepon</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($lowongan as $lp)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $lp->nama_pekerjaan }}</td>
                                        <td>{{ $lp->perusahaan }}</td>
                                        <td>{{ $lp->kategori->nama_kategori }}</td>
                                        <td>{{ $lp->tipe_pekerjaan }}</td>
                                        <td>{{ $lp->deskripsi }}</td>
                                        <td>{{ $lp->contact_person }}</td>
                                        <td>{{ $lp->no_telp }}</td>
                                        <td>
                                            <div class="form-group col-md-1">

                                            </div>
                                            <div class="form-group col-md-1">
                                                <a href="/dashboard/lowonganpekerjaan/{{ $lp->nama_pekerjaan }}/edit"
                                                    class="btn btn-warning"><i class="fas fa-pencil-ruler"></i></a>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <form action="/dashboard/toko/{{ $lp->nama_pekerjaan }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button href="/dashboard/toko/{{ strtolower($lp->nama_pekerjaan) }}"
                                                        class="btn btn-danger" type="submit"
                                                        onclick="return confirm('Are you sure?')"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <p>Showing
                                        {{ $lowongan->firstItem() }}
                                        to
                                        {{ $lowongan->lastItem() }}
                                        of
                                        {{ $lowongan->total() }}
                                        entries
                                    </p>
                                </div>
                                <div class="form-group col-md-3">
                                    {{ $lowongan->links() }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
