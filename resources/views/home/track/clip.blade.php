@extends('layouts.main')
{{-- @dd($tracks) --}}
@section('content')
<div class="row justify-content-center m-lg-3">
  <div class="col-md-6">
    <form action="/transaksi" method="get">
      @csrf
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search by Token & Laundry Name ..." name="search" value="{{ request('search') }}">
        <button class="btn btn-dark" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>

@if(request(['search']))
<div class="container">
  <div class="row m-lg-2">
    @foreach ($tracks as $data)
    <div class="col-4">
      <div class="card text-center my-3 overflow-hidden">
      <small class="text-sm-start text-bg-dark">Berat Pesanan : {!! $data->berat !!} KG</small>
        <div class="card-body">
          <h5 class="card-title">{!! $data->nama_toko !!}</h5>
          <p class="card-text">Token : {!! $data->token !!}</p>
          <p class="card-text">Nama Pemesan : {!! $data->nama !!}</p>
          <p class="card-text">Status Pesanan : {!! $data->status->status !!}</p>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
@else
<p class="d-flex justify-content-center align-items-center fs-2 text-dark bar">Not Found</p>
@endif

@if(!request())
    <p class="d-flex justify-content-center align-items-center fs-2 text-danger bar">Silakan Mulai Mencari</p>
@endif

@if(request(['search']))
{{ $tracks->links() }}
@endif

@endsection
