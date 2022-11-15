@extends('newlayouts.main')

@section('kategori', 'active')

@section('content')
    <div class="section-header">
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-desktop"></i> Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('kategori.index') }}"><i class="fas fa-clipboard-list"></i> Kategori</a></div>
            <div class="breadcrumb-item"><a href="/dashboard/kategori/{{ $kategori->id }}/edit"><i class="fas fa-pencil-ruler"></i> Edit Kategori</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form method="post" action="/dashboard/kategori/{{ $kategori->id }}">
                    @method('put')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Edit Data Kategori</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="nama_kategori">Nama Kategori</label>
                                    <input type="text" class="form-control @error('nama_kategori') is-invalid @enderror"
                                        id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori" required
                                        value="{{ old('nama_kategori', $kategori->nama_kategori) }}">
                                    @error('nama_kategori')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-5">
                                    
                              </div>
                                <div class="form-group col-md-1">
                                    <a href="{{ route('kategori.index') }}" class="btn btn-primary">Back</a>
                                </div>
                                <div class="form-group col-md-6">
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
