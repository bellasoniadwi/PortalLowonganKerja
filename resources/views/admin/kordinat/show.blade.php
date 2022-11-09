@extends('newlayouts.main')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-desktop"></i> Dashboard</a></div>
            <div class="breadcrumb-item"><a><i class="far fa-newspaper"></i> Detail Lowongan Pekerjaan</a></div>
        </div>
    </div>

    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Detail Data {{$lowongan->nama_pekerjaan}} di {{$lowongan->perusahaan}}</h4>
            </div>
            <div class="card-body">
                <div id="accordion">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-1" aria-expanded="true">
                                    <h4>Nama Pekerjaan</h4>
                                </div>
                                <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                    <p class="mb-0">{{$lowongan->nama_pekerjaan}}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-2">
                                    <h4>Kategori</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                    <p class="mb-0">{{$lowongan->kategori->nama_kategori}}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-3">
                                    <h4>Gaji</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                    <p class="mb-0">
                                        @if($lowongan->gaji =='-')
                                            Tidak Dicantumkan
                                        @else
                                            {{$lowongan->gaji}}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-4">
                                    <h4>Perusahaan</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                                    <p class="mb-0"><img width="100px" height="70px" src="{{ asset('storage/' . $lowongan->foto) }}" class="rounded-circle mr-1">   {{$lowongan->perusahaan}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-5">
                                    <h4>Tipe Pekerjaan</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
                                    <p class="mb-0">{{$lowongan->tipe_pekerjaan}}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-6">
                                    <h4>Jumlah Jam Kerja</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-6" data-parent="#accordion">
                                    <p class="mb-0">{{$lowongan->jam_kerja}}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-7">
                                    <h4>Deskripsi</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-7" data-parent="#accordion">
                                    <p class="mb-0">{{$lowongan->deskripsi}}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-8">
                                    <h4>Contact Person</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-8" data-parent="#accordion">
                                    <p class="mb-0">{{$lowongan->contact_person}} - {{$lowongan->no_telp}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
