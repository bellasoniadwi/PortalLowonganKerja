@extends('newlayouts.main')

@section('faq', 'active')

@section('icon', 'far fa-comments')
@section('judul', 'FREQUENTLY ASKED QUESTION')

@section('content')
<div class="section-body">
    <h2 class="section-title">List Pertanyaan yang Mungkin Membantu Anda</h2>
<div class="row">
    <div class="col-12">
      <div class="activities">
        @foreach ($faqs as $fq)
        <div class="activity">
          <div class="activity-icon bg-primary text-white shadow-primary">
            <i class="fas fa-comment-alt"></i>
          </div>
          <div class="activity-detail">
            <div class="mb-2">
              <span class="text-job text-primary">{{ $fq->pertanyaan }}</span>
              <span class="bullet"></span>
              {{-- <a class="text-job" href="#">View</a> --}}
            </div>
            <p>{{ $fq->jawaban }}</p>
          </div>
        </div>
        @endforeach
      </div>
    <a href="{{ route('userfaq.create') }}">Tidak Menemukan Pertanyaan yang Dicari? Tanyakan Sekarang!</a>
    </div>
  </div>
</div>
@endsection