@extends('layouts.main')

@section('content')
<div class="conatiner-fluid mt-lg-5 mb-lg-5 my-lg-5">
  <div class="mb-3 w-50 h-50 d-flex" style="max-width: 1200px;">
    <div class="row row-cols-lg-2 g-0">
      <div class="col-md-6">
        <img src="{{ asset('img/'. $image) }}" class="img-fluid rounded rounded-circle" alt="{{ $nama }}">
      </div>
      <div class="col-md-6">
        <div class="card-body ms-lg-3">
          <h5 class="card-title h1">{{ $nama }}</h5>
          <p class="card-text h3">{{ $email }}</p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
