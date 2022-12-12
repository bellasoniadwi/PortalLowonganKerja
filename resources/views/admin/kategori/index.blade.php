@extends('newlayouts.main')

@section('kategori', 'active')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-desktop"></i> Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('kategori.index') }}"><i class="fas fa-clipboard-list"></i>
                    Kategori</a></div>
        </div>
    </div>

    <div class="section-body">
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
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Kategori</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($kategori as $kat)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $kat->nama_kategori }}</td>
                                        <td class="text-center">
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                </div>
                                                <div class="form-group col-md-2">
                                                    <a id="edit" href="/dashboard/kategori/{{ $kat->id }}/edit"
                                                        class="btn btn-warning">
                                                        <i class="fas fa-pencil-ruler"></i>
                                                    </a>
                                                </div>
                                                
                                                <div class="form-group col-md-2">
                                                    <form action="/dashboard/kategori/{{ $kat->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button id="hapus" href="/dashboard/kategori/{{ $kat->id }}" method="post"
                                                            type="submit" class="btn btn-danger show_confirm">
                                                            @method('delete')
                                                            @csrf
                                                            <i class="fas fa-trash-alt"></i>
                                                        </button>
                                                    </form>
                                                </div>
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
@section('js')
    {{-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            swal({
                    title: `Yakin ingin menghapus data?`,
                    text: "Data ini akan terhapus permanen setelah anda menyetujui pesan ini",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Data Anda Aman!");
                    }
                });
        });
    </script>
@endsection
