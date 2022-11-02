@extends('newlayouts.main')

@section('lowonganpekerjaan', 'active')

@section('content')
    <div class="section-header">
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('lowonganpekerjaan.index') }}">Perusahaan</a></div>
            <div class="breadcrumb-item"><a href="/dashboard/lowonganpekerjaan/{{ $lowongan->id }}/edit">Edit Kategori</a>
            </div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form method="post" action="/dashboard/lowonganpekerjaan/{{ $lowongan->id }}">
                    @method('put')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Edit Data Lowongan Pekerjaan</h4>
                            <input type="hidden" name="oldImage" value="{{ $lowongan->image }}">
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_pekerjaan">Nama Pekerjaan</label>
                                    <input type="text" class="form-control @error('nama_pekerjaan') is-invalid @enderror"
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
                                    <input type="text" class="form-control @error('contact_person') is-invalid @enderror"
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
                                    <label for="kategori_id">Kategori</label>
                                    <select class="form-control select2 @error('kategori_id') is-invalid @enderror"
                                        id="kategori_id" name="kategori_id" required>
                                        @foreach ($kategori as $data)
                                          <option value="{{$data->id}}"
                                            @if ($data->id == $data->nama_kategori) selected
                                            @endif>{{$data->nama_kategori}}
                                          </option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="tipe_pekerjaan">Tipe Pekerjaan</label>
                                    <select class="form-control select2 @error('tipe_pekerjaan') is-invalid @enderror"
                                        id="tipe_pekerjaan" name="tipe_pekerjaan" required>
                                        <option value="Part Time" @if ($lowongan->tipe_pekerjaan == "Part Time")selected @endif>Part Time</option>
                                        <option value="Full Time" @if ($lowongan->tipe_pekerjaan == "Full Time")selected @endif>Full Time</option>
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
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                        id="deskripsi" name="deskripsi" placeholder="Deskripsi" required
                                        value="{{ old('deskripsi', $lowongan->deskripsi) }}" >
                                    @error('deskripsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="x">Latitude</label>
                                    <input type="text" class="form-control @error('x') is-invalid @enderror"
                                        id="x" name="x" placeholder="Latitude" required
                                        value="{{ old('x', $lowongan->x) }}" readonly />
                                    @error('x')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="y">Longitude</label>
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
                                <div class="form-group col-md-1">
                                    <a href="{{ route('lowonganpekerjaan.index') }}" class="btn btn-primary">Back</a>
                                </div>
                                <div class="form-group col-md-11">
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
