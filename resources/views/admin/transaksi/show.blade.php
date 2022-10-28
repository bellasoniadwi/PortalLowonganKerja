@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
  <div class="list-group text-center">
    <div class="d-flex justify-content-center">
      <div class="col-6">
        <div class="list-group-item list-group-item-action" aria-current="true">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{!! $transaksis[0]->Toko->nama !!}</h5>
            <small>{{ $transaksis[0]->created_at->diffForHumans() }}</small>
          </div>
          <p class="mb-1">Client : {!! $transaksis[0]->nama !!}</p>
          <p class="mb-1">Client Token : {!! $transaksis[0]->token !!}</p>
          <p class="mb-1">Jenis Pelayanan : {!! $transaksis[0]->Layanan->jenis !!}</p>
          <p class="mb-1">Berat Pesanan : {!! $transaksis[0]->berat !!}</p>
          <small>Status Pesanan : {!! $transaksis[0]->Status->status !!}</small>
        </div>
        <div class="container-fluid mt-2">
            <a href="{{ route('transaksi.index') }}" class="btn btn-info"><i data-feather="arrow-left"></i></a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
