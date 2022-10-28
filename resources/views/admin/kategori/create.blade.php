@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
  <form class="form-horizontal" method="post" action="/dashboard/kategori">
    @csrf
    <div class="card-body mb-2">
      <h4 class="card-title d-flex justify-content-center pb-2">Create Data</h4>
      <br>
      <div class="form-group row">
        <label for="nama_kategori" class="col-sm-3 text-end control-label col-form-label">Nama Kategori</label>
        <div class="col-md-6">
          <input type="text" class="form-control @error('nama_kategori')
                  is-invalid
              @enderror" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" required value="{{ old('nama_kategori') }}" />
        @error('nama_kategori')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
      </div>
      <br>
    </div>
    <div class="card-body">
      <div class="card-body d-flex justify-content-center">
        <a href="{{ route('kategori.index') }}" class="btn btn-info me-1"><i data-feather="arrow-left"></i></a>
        <button type="submit" class="btn btn-success">
          <i data-feather="file-plus"></i>
        </button>
      </div>
    </div>
  </form>
</div>
@endsection
