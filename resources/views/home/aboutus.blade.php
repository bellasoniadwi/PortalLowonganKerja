@extends('newlayouts.main')

@section('about', 'active')

@section('icon', 'far fa-address-card')
@section('judul', 'ABOUT US')



@section('content')
<div class="row">
    <div class="col-12 col-sm-12 col-lg-12">
      <div class="section-header">
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item"><a href="/"><i class="fas fa-home"></i> Beranda</a></div>
            <div class="breadcrumb-item"><i class="far fa-address-card"></i> About Us</div>
        </div>
      </div>
      <div class="card author-box card-primary">
        <div class="card-body">
          <div class="author-box-left">
            <img alt="image" width="180px" height="180px" src="{{ asset('layoutAuth/images/icons/about.png') }}">
            <div class="clearfix"></div>
            {{-- <a href="#" class="btn btn-primary mt-3 follow-btn" data-follow-action="alert('follow clicked');" data-unfollow-action="alert('unfollow clicked');">Follow</a> --}}
          </div>
          
          <div class="author-box-details">
            <div class="author-box-name">
              <a href="/">   Tentang LOKERPORTAL</a>
            </div>
            {{-- <div class="author-box-job">Web Developer</div> --}}
            <div class="author-box-description">
              <p> 
                LOKERPORTAL adalah sebuah portal berbasis website yang mempermudah pencarian lowongan pekerjaan. Job Seeker dapat mengakses informasi lengkap beserta pemetaan lokasinya. Rekruter dari berbagai tingkatan akan mengajak Anda bergabung pada perusahaan. Siapkan diri Anda dan bergabunglah pada perusahaan yang anda inginkan.

              </p>
            </div>
            {{-- <div class="mb-2 mt-3"><div class="text-small font-weight-bold">Follow Hasan On</div></div> --}}
            <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#" class="btn btn-social-icon mr-1 btn-github">
              <i class="fab fa-github"></i>
            </a>
            <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
              <i class="fab fa-instagram"></i>
            </a>
            <div class="w-100 d-sm-none"></div>
            <div class="float-right mt-sm-0 mt-3">
              <a href="#read_more" class="btn">Read More <i class="fas fa-chevron-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
<div class="card" id="read_more">
    <div class="card-header">
      <h4>Kenapa Memilih LOKERPORTAL?</h4>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-4">
          <div class="list-group" id="list-tab" role="tablist">
            <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab"><i class="fas fa-street-view"></i>  Lokasi Terdekat</a>
            <a class="list-group-item list-group-item-action" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab"><i class="fas fa-route"></i>  Dilengkapi Rute</a>
            <a class="list-group-item list-group-item-action" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab"><i class="fas fa-binoculars"></i>  Pencarian Cepat</a>
            <a class="list-group-item list-group-item-action" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab"><i class="fas fa-thumbs-up"></i>  Akses mudah</a>
          </div>
        </div>
        <div class="col-8">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list"><br>
                LOKERPORTAL menampilkan ada/tidaknya lowongan pekerjaan dengan tampilan
                berupa maps, sehingga pengguna bisa mengetahui Lowongan dengan lokasi jarak
                yang berdekatan dengannya
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list"><br><br>
                LOKERPORTAL dilengkapi dengan fitur show route, sehingga mampu membantu pengguna menemukan 
                rute lokasi lowongan pekerjaan yang dituju
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list"><br><br>
                Dengan LOKERPORTAL, pengguna bisa menemukan kriteria pekerjaan yang sesuai dengan cepat melalui 
                fitur searching yang disediakan di dalamnya
            </div>
            <div class="tab-pane fade" id="list-settings" role="tabpanel" aria-labelledby="list-settings-list"><br>
                LOKERPORTAL memiliki tampilan utama berupa maps yang pastinya membuat pengguna tidak asing lagi dengan
                cara aksesnya, sehingga LOKERPORTAL memberikan kemudahan terhadap akses pengguna karena tampilan seluruh data lowongan
                pekerjaan dikemas sedemikian ringkas
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection