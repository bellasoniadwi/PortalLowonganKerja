@extends('newlayouts.main')

@section('perusahaan', 'active')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('toko.index') }}">Perusahaan</a></div>
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
                        <a href="/dashboard/toko/create" class="btn btn-primary"> + Tambah </a>
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped" id="table-1">
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
                                    <tr>
                                        @foreach ($tokos as $toko)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $toko->nama }}</td>
                                        <td>{{ $toko->pemilik }}</td>
                                        <td><img width="70px" height="60px" src="{{ asset('storage/' . $toko->image) }}">
                                        </td>
                                        <td>{{ $toko->no_hp }}</td>
                                        <td>{{ $toko->alamat }}</td>
                                        <td>
                                            <a href="/dashboard/toko/{{ $toko->nama }}/edit" class="btn btn-warning"><i class="fas fa-pencil-ruler"></i></a>
                                            <form action="/dashboard/toko/{{ $toko->nama }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <button href="/dashboard/toko/{{ strtolower($toko->nama) }}"
                                                    class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <p>Showing
                                        {{$tokos->firstItem()}}
                                        to
                                        {{$tokos->lastItem()}}
                                        of
                                        {{$tokos->total()}}
                                        entries
                                    </p>
                                </div>
                                <div class="form-group col-md-3">
                                    {{$tokos->links()}}
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
