@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
  <form class="form-horizontal" method="post" action="/dashboard/status">
    @csrf
    <div class="card-body mb-2">
      <h4 class="card-title d-flex justify-content-center pb-2">Create Data</h4>
      <div class="form-group row">
        <label for="status" class="col-sm-3 text-end control-label col-form-label">Status</label>
        <div class="col-md-6">
          <input type="text" class="form-control @error('status')
                  is-invalid
              @enderror" id="status" name="status" placeholder="Status" required value="{{ old('status') }}" />
        @error('status')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
      </div>
    </div>
    <div class="card-body">
      <div class="card-body d-flex justify-content-center">
        <a href="{{ route('status.index') }}" class="btn btn-info me-1"><i data-feather="arrow-left"></i></a>
        <button type="submit" class="btn btn-success">
          <i data-feather="file-plus"></i>
        </button>
      </div>
    </div>
  </form>
</div>
@endsection
