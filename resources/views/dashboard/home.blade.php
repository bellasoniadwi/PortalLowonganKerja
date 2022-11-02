@extends('newlayouts.main')

@section('home', 'active')

@section('content')
    <!-- Main Content -->
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap" href="{{ route('titik.index') }}">
                    <div class="card-header">
                        <h4>Lokasi</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\Peta::count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap" href="{{ route('toko.index') }}">
                    <div class="card-header">
                        <h4>Lowongan</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\LowonganPekerjaan::count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="far fa-file"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Kategori</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\Kategori::count() }}
                    </div>
                </div>
            </div>
        </div>
        @can('admin')
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-success">
                    <i class="fas fa-circle"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Admin</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\User::where('is_admin', false)->count() }}
                    </div>
                </div>
            </div>
        </div>
        @endcan
    </div>
@endsection
