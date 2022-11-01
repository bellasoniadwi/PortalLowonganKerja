@extends('newlayouts.main')

@section('kategori', 'active')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('kategori.index') }}">Kategori</a></div>
        </div>
    </div>

    <div class="section-body">
        <p class="section-lead">
            @if (session('success'))
                <div class="alert alert-success alert-has-icon">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Success</div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Kategori</h4>
                    </div>
                    <div class="card-body">
                        <a href="/dashboard/kategori/create" class="btn btn-primary"> + Tambah </a>
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Kategori</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($kategori as $kat)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $kat->nama_kategori }}</td>
                                        <td>
                                            <div class="form-group col-md-1">
                                                
                                            </div>
                                            <div class="form-group col-md-1">
                                                <a href="/dashboard/kategori/{{ $kat->id }}/edit"
                                                    class="btn btn-warning"><i class="fas fa-pencil-ruler"></i></a>
                                            </div>
                                            <div class="form-group col-md-1">
                                                <form action="/dashboard/kategori/{{ $kat->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button href="/dashboard/kategori/{{ $kat->id }}"
                                                        class="btn btn-danger" type="submit"
                                                        onclick="return confirm('Are you sure?')"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <p>Showing
                                        {{ $kategori->firstItem() }}
                                        to
                                        {{ $kategori->lastItem() }}
                                        of
                                        {{ $kategori->total() }}
                                        entries
                                    </p>
                                </div>
                                <div class="form-group col-md-3">
                                    {{ $kategori->links() }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
