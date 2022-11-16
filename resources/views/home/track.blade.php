@extends('newlayouts.main')

@section('icon', 'fa fa-search')
@section('judul', 'LACAK LOWONGAN')

@section('content')

    <div class="row">
      <div class="col-12 col-sm-6 col-md-6 col-lg-4">
        <form action="{{ url()->current() }}" method="GET">
            <div class="input-group">
                <select class="custom-select" id="inputGroupSelect05" name="keyword" value="{{ request('keyword') }}">
                    <option value="">--Pilih Kategori Pekerjaan--</option>
                    @foreach ($sorted as $data)
                        <option value="{{ $data->nama_kategori }}"
                            {{ old('kategori_id') == $data->nama_kategori ? 'selected' : '' }}>{{ $data->nama_kategori }}
                        </option>
                    @endforeach
                </select>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">FILTER</button>
                </div>
            </div>
        </form>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-5">
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-lg-3">
        <form action="{{ url()->current() }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="keyword" value="{{ request('keyword') }}">
                </select>
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">SEARCH</button>
                </div>
            </div>
        </form>
      </div>
    </div>

    <br><br>
    <div class="row">
        @foreach ($lowongan as $lp)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                    <div class="article-header">
                        <div class="article-image"><img width="280px" height="150px"
                                src="{{ asset('storage/' . $lp->foto) }}">
                        </div>
                        <div class="article-badge">
                            <div class="article-badge-item bg-danger"><i class="fas fa-clipboard-list"></i>
                                {{ $lp->kategori->nama_kategori }}</div>
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-title">
                            <h2><a>{{ $lp->nama_pekerjaan }}</a></h2>
                            <h2><a>{{ $lp->perusahaan }}</a></h2>
                        </div>
                        <p>{{ Str::limit($lp->deskripsi) }}</p>
                        <div class="article-cta">
                            <a href="{{ route('lowonganpekerjaan.detail_user', $lp->id) }}">Selengkapnya <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
          {{ $lowongan->links() }}
      </div>
  </div>
@endsection