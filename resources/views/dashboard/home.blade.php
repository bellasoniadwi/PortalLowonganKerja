@extends('newlayouts.main')

@section('home', 'active')

@section('content')
    <!-- Main Content -->
    <div class="section-header">
        <h1>Dashboard</h1>
    </div>
    <div class="row">
        {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-map-marker-alt"></i>
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
        </div> --}}
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-newspaper"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Lowongan</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\LowonganPekerjaan::where('status', true)->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                    <i class="fas fa-clipboard-list"></i>
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
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Kontributor</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\User::where('is_admin', false)->count() }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="fas fa-comment-alt"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Pertanyaan Tanpa Jawaban</h4>
                    </div>
                    <div class="card-body">
                        {{ App\Models\Faq::where('jawaban', '=', null)->count() }}
                    </div>
                </div>
            </div>
        </div>
        @endcan
    </div>
@endsection
