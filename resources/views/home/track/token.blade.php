@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6 text-center">
      <div class="card my-lg-3">
        <div class="card-body">
          <h5 class="card-subtitle mb-2">{{ $tokens->nama }}</h5>
          <p class="card-text">Nomor Token : {{ $tokens->token }}</p>
          <p class="card-text">Status Pesanan : {{ $tokens->status->status }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
