@extends('newlayouts.main')

@section('perusahaan', 'active')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}" ><i class="fas fa-desktop"></i> Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('perusahaan') }}"><i class="fas fa-city"></i> Perusahaan</a></div>
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
                    <div class="card-header">
                        <h4>List Perusahaan</h4>
                    </div>
                    <div class="card-body">
                        {{-- <a href="/dashboard/toko/create" class="btn btn-primary"> + Tambah </a> --}}
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Contact Person</th>
                                        <th>Nomor Telepon</th>
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($user as $us)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $us->perusahaan }}</td>
                                        <td>{{ $us->nama }}</td>
                                        <td>{{ $us->no_telp }}</td>
                                        <td>{{ $us->email }}</td>
                                        <td>
                                            @if ($us->is_block == 'no')
                                                Safe
                                            @else
                                                Blocked
                                            @endif
                                        </td>
                                        <td>
                                            <div class="form-group col-md-1">

                                            </div>
                                            <div class="form-group col-md-1">
                                                <a href="#" class="btn btn-primary"><i class="fas fa-eye"></i></a>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <a href="#" class="btn btn-danger"><i
                                                        class="fas fa-trash-alt"></i></a>
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
                                        {{ $user->firstItem() }}
                                        to
                                        {{ $user->lastItem() }}
                                        of
                                        {{ $user->total() }}
                                        entries
                                    </p>
                                </div>
                                <div class="form-group col-md-3">
                                    {{ $user->links() }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
