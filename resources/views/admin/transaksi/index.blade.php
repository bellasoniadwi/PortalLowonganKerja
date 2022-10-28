@extends('admin.layouts.main')

@section('content')
@if(session('success'))
<div class="alert alert-success container container-fluid" role="alert">
  {{ session('success') }}
</div>
@endif
<div class="container-fluid">
  <a href="/dashboard/transaksi/create" class="btn btn-success mb-2"><i data-feather="file-plus"></i></a>
  <div class="table-responsive">
    <table class="table table-striped table-bordered" id="myTable">
      <thead>
        <tr>
          <th>No</th>
          <th>Berat (KG)</th>
          <th>Nama Usaha</th>
          <th>Nama Client</th>
          <th>Client Token</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($transaksis as $transaksi)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{!! $transaksi->berat !!}</td>
          <td name="nama_toko">{!! $transaksi->nama_toko !!}</td>
          <td>{!! $transaksi->nama !!}</td>
          <td>{!! $transaksi->token !!}</td>
          <td>
            {{-- <a href="/dashboard/transaksi/{{ $transaksi->id }}" class="btn btn-info"><i data-feather="eye"></i></a>| --}}
            <a href="/dashboard/transaksi/{{ $transaksi->id }}/edit" class="btn btn-warning"><i data-feather="edit"></i></a>
            <form action="/dashboard/transaksi/{{ $transaksi->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button href="/dashboard/transaksi/{{ $transaksi->id }}" class="btn btn-danger" type="submit" onclick="return confirm('Are you sure?')"><i data-feather="trash"></i></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
      <tfoot>
        <tr>
          <th>No</th>
          <th>Berat (KG)</th>
          <th>Nama Usaha</th>
          <th>Nama Client</th>
          <th>Client Token</th>
          <th>Action</th>
        </tr>
      </tfoot>
    </table>
  </div>
</div>
@endsection
