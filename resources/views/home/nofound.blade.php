@extends('newlayouts.main')

@section('icon', 'fa fa-search')
@section('judul', 'HASIL FILTER')

@section('content')
<div class="row">
    <div class="col-12 col-sm-6 col-md-6 col-lg-9"></div>

    <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <a href="{{ route('tracking.index') }}" class="btn btn-primary"><i class="fa fa-home"></i> Kembali ke halaman sebelumnya</a>
    </div>
  </div>

<div class="row">
    <div class="section-body">
    <h2 class="section-title">Tidak ada data !</h2>
    <p class="section-lead">Belum ada data ditemukan dalam kategori {{ $namakat }}</p>
    </div>
</div>

@endsection
