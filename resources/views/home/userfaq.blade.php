@extends('newlayouts.main')

@section('faq', 'active')

@section('icon', 'fas fa-pencil-ruler')
@section('judul', 'TULIS PERTANYAAN')

@section('content')
<div class="section-header">
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i> Beranda</a></div>
        <div class="breadcrumb-item"><a href="{{ route('faq.user') }}"><i class="far fa-comments"></i> FAQ</a></div>
        <div class="breadcrumb-item"><i class="fas fa-pencil-ruler"></i> Tulis Pertanyaan</div>
    </div>
  </div>
<div class="section-body">
  <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
          <form method="post" action="/userfaq">
              @csrf
              <div class="card">
                  <div class="card-header">
                      <h4>Form Pengajuan Pertanyaan</h4>
                  </div>
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-12">
                          <label for="pertanyaan">Pertanyaan</label>
                          <textarea type="text" class="form-control @error('pertanyaan') is-invalid @enderror"
                              id="pertanyaan" name="pertanyaan" placeholder="Tuliskan Pertanyaan yang Ingin Anda Tanyakan" required
                              value="{{ old('pertanyaan') }}"></textarea>
                          @error('pertanyaan')
                              <div class="invalid-feedback">
                                  {{ $message }}
                              </div>
                          @enderror
                      </div>
                  </div>
                      <div class="form-row">
                        <div class="form-group col-md-5">
                              
                        </div>
                          <div class="form-group col-md-2">
                              <a href="{{ route('faq.user') }}" class="btn btn-primary">Back</a>
                              <button type="submit" class="btn btn-success">Submit</button>
                          </div>
                          
                      </div>
                  </div>
              </div>
          </form>
      </div>
  </div>
</div>
@endsection