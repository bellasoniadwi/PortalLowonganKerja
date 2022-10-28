@extends('admin.layouts.main')

@section('content')
<div class="row">
  <div class="col-md-3">
    <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header"><i data-feather="map"></i> Peta</div>
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('titik.index') }}" class="text-decoration-none text-white">Peta</a></h5>
        <p class="card-text">Total data : {{ App\Models\Peta::count() }}</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card  text-bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header"><i data-feather="cpu"></i> Perusahaan</div>
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('toko.index') }}" class="text-decoration-none text-white">Perusahaan</a></h5>
        <p class="card-text">Total data : {{ App\Models\Toko::count() }}</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header"><i data-feather="target"></i> Layanan</div>
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('layanan.index') }}" class="text-decoration-none text-white">Layanan</a></h5>
        <p class="card-text">Total data : {{ App\Models\Layanan::count() }}</p>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header"><i data-feather="clipboard"></i> Transaksi</div>
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('transaksi.index') }}" class="text-decoration-none text-white">Layanan</a></h5>
        <p class="card-text">Total data : {{ App\Models\Transaksi::count() }}</p>
      </div>
    </div>
  </div>
  @can('admin')
  <div class="col-md-3">
    <div class="card text-bg-dark mb-3" style="max-width: 18rem;">
      <div class="card-header"><i data-feather="tag"></i> Status</div>
      <div class="card-body">
        <h5 class="card-title"><a href="{{ route('status.index') }}" class="text-decoration-none text-white">Status</a></h5>
        <p class="card-text">Total data : {{ App\Models\Status::count() }}</p>
      </div>
    </div>
  </div>
  @endcan
</div>
@endsection
