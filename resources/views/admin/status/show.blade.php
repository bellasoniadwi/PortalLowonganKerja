@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
    @if($statuses[0]->status == 'Selesai' && 'Finish')
    <h1 class="h3 text-capitalize text-center">Status <span class="badge badge-success rounded-pill bg-success">{!! $statuses[0]->status !!}</span></h1>
    @elseif ($statuses[0]->status == 'Batal' && 'Cancel')
    <h1 class="h3 text-capitalize text-center">Status <span class="badge badge-danger rounded-pill bg-danger">{!! $statuses[0]->status !!}</span></h1>
    @else
    <h1 class="h3 text-capitalize text-center">Status <span class="badge badge-info rounded-pill bg-info">{!! $statuses[0]->status !!}</span></h1>
    @endif
    <div class="d-flex justify-content-center mt-2">
      <a href="{{ route('status.index') }}" class="btn btn-info"><i data-feather="arrow-left"></i></a>
    </div>
</div>
@endsection
