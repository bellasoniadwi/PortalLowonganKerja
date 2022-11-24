@extends('newlayouts.main')

@section('lowonganpekerjaan', 'active')

@section('content')
    @if (Auth::user()->nama == $lowongan->contact_person)
        <div class="section-header">
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-desktop"></i> Dashboard </a></div>
                <div class="breadcrumb-item"><a href="{{ route('lowonganpekerjaan.index') }}"><i class="far fa-newspaper"></i> Lowongan Pekerjaan </a></div>
                <div class="breadcrumb-item"><a href="/dashboard/lowonganpekerjaan/{{ $lowongan->id }}/edit"><i class="fas fa-pencil-ruler"></i> Edit Lowongan Pekerjaan </a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                    <form method="post" action="/dashboard/lowonganpekerjaan/{{ $lowongan->id }}"
                        enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="card">
                            <div class="card-header">
                                <h4>Form Edit Data Lowongan Pekerjaan</h4>
                                <input type="hidden" name="oldImage" value="{{ $lowongan->foto }}">
                            </div>
                            <div class="card-body">
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="nama_pekerjaan">Nama Pekerjaan</label>
                                        <input type="text"
                                            class="form-control @error('nama_pekerjaan') is-invalid @enderror"
                                            id="nama_pekerjaan" name="nama_pekerjaan" placeholder="Nama Pekerjaan" required
                                            value="{{ old('nama_pekerjaan', $lowongan->nama_pekerjaan) }}">
                                        @error('nama_pekerjaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="contact_person">Contact Person</label>
                                        <input type="text"
                                            class="form-control @error('contact_person') is-invalid @enderror"
                                            id="contact_person" name="contact_person" placeholder="Contact Person" required
                                            value="{{ old('contact_person', $lowongan->contact_person) }}" readonly>
                                        @error('contact_person')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="perusahaan">Perusahaan</label>
                                        <input type="text" class="form-control @error('perusahaan') is-invalid @enderror"
                                            id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan" required
                                            value="{{ old('perusahaan', $lowongan->perusahaan) }}" readonly>
                                        @error('perusahaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="no_telp">Nomor Telepon</label>
                                        <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                            id="no_telp" name="no_telp" placeholder="Nomor Telepon" required
                                            value="{{ old('no_telp', $lowongan->no_telp) }}" readonly>
                                        @error('no_telp')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="kategori">Kategori</label>
                                        <select class="form-control select2 @error('kategori') is-invalid @enderror"
                                            id="kategori" name="kategori" required>
                                            @foreach ($kategori as $data)
                                            <option value="{{ $data->nama_kategori }}" @if ($data->kategori == $data->nama_kategori) selected @endif>{{ $data->nama_kategori }}</option>
                                            @endforeach
                                        </select>
                                        @error('kategori')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="tipe_pekerjaan">Tipe Pekerjaan</label>
                                        <select class="form-control select2 @error('tipe_pekerjaan') is-invalid @enderror"
                                            id="tipe_pekerjaan" name="tipe_pekerjaan" required>
                                            <option value="Part Time" @if ($lowongan->tipe_pekerjaan == 'Part Time') selected @endif>Part
                                                Time</option>
                                            <option value="Full Time" @if ($lowongan->tipe_pekerjaan == 'Full Time') selected @endif>Full
                                                Time</option>
                                        </select>
                                        @error('tipe_pekerjaan')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="jam_kerja">Jam Kerja *</label>
                                        <input type="text" class="form-control @error('jam_kerja') is-invalid @enderror"
                                            id="jam_kerja" name="jam_kerja" placeholder="6 jam/hari" required
                                            value="{{ old('jam_kerja', $lowongan->jam_kerja) }}">
                                        @error('jam_kerja')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="x">Latitude *</label>
                                        <input type="text" class="form-control @error('x') is-invalid @enderror"
                                            id="x" name="x" placeholder="Latitude" required
                                            value="{{ old('x', $lowongan->x) }}" readonly>
                                        @error('x')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="y">Longitude *</label>
                                        <input type="text" class="form-control @error('y') is-invalid @enderror"
                                            id="y" name="y" placeholder="Longitude" required
                                            value="{{ old('y', $lowongan->y) }}" readonly>
                                        @error('y')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="gaji">Gaji</label>
                                        <input type="text" class="form-control @error('gaji') is-invalid @enderror"
                                            id="gaji" name="gaji" placeholder="Nominal gaji (kosongi jika rahasia)"
                                            value="{{ old('gaji', $lowongan->gaji) }}">
                                        @error('gaji')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="deskripsi">Deskripsi *</label>
                                        <textarea type="text" maxlength="200" class="form-control @error('deskripsi') is-invalid @enderror"
                                            id="deskripsi" name="deskripsi" placeholder="Deskripsi singkat lowongan pekerjaan" required
                                            value="{{ old('deskripsi', $lowongan->deskripsi) }}">{{ old('deskripsi', $lowongan->deskripsi) }}</textarea>
                                        @error('deskripsi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="foto">Foto Perusahaan</label>
                                        <input type="file" class="form-control @error('foto') is-invalid @enderror"
                                            id="foto" name="foto" placeholder="Upload Foto"
                                            value="{{ old('foto', $lowongan->foto) }}"
                                            onchange="return showPreview(this)">
                                        <br><img width="100px"
                                            height="70"src="{{ asset('storage/' . $lowongan->foto) }}">
                                        @error('foto')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group col-md-1">
                                        <a></a>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <br><br>
                                        <a href="{{ route('lowonganpekerjaan.index') }}" class="btn btn-primary">Back</a>
                                    </div>
                                    <div class="form-group col-md-1">
                                        <br><br>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @else
        <div id="app">
            <section class="section">
                <div class="container mt-5">
                    <div class="page-error">
                        <div class="page-inner">
                            <h1>403</h1>
                            <div class="page-description">
                                Maaf Anda tidak memiliki akses
                            </div>
                            <div class="page-search">
                                <form>
                                    <div class="form-group floating-addon floating-addon-not-append">
                                        <div class="input-group">
                                        </div>
                                    </div>
                                </form>
                                <div class="mt-3">
                                    <a href="{{ route('home') }}">Kembali ke Dashboard</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-left">
                        {{-- <div class="bullet"></div> Kelompok 8 - Proyek 2</a> --}}
                    </div>
                </div>
            </section>
        </div>
    @endif
@endsection
