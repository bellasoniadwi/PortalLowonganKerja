@extends('newlayouts.main')

@section('lowonganpekerjaan', 'active')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-desktop"></i> Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('lowonganpekerjaan.index') }}"><i class="far fa-newspaper"></i> Lowongan Pekerjaan</a></div>
        </div>
    </div>

    <div class="section-body">
        {{-- <p class="section-lead">
            @if (session('success'))
                <div class="alert alert-success alert-has-icon">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                        <div class="alert-title">Success</div>
                        {{ session('success') }}
                    </div>
                </div>
            @endif
        </p> --}}

        <div class="row">
            <div class="col-12">
                <div class="card">
                    @cannot('admin')
                        <div class="card-header">
                            <h4>List Lowongan Pekerjaan Yang Anda Kelola</h4>
                        </div>
                    @endcannot
                    @can('admin')
                        <div class="card-header">
                            <h4>List Seluruh Lowongan Pekerjaan</h4>
                        </div>
                    @endcan
                    <div class="card-body">
                        @cannot('admin')
                            <a href="/dashboard/lowonganpekerjaan/create" class="btn btn-primary"> + Tambah </a>
                        @endcan
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Pekerjaan</th>
                                        <th class="text-center">Perusahaan</th>
                                        <th class="text-center">Kategori</th>
                                        <th class="text-center">Tipe Pekerjaan</th>
                                        <th class="text-center">Deskripsi</th>
                                        @cannot('admin')
                                        <th class="text-center">Status Aktif</th>
                                        @endcannot
                                        @can('admin')
                                            <th class="text-center">Contact Person</th>
                                            <th class="text-center">Nomor Telepon</th>
                                        @endcan
                                        @cannot('admin')
                                            <th class="text-center">Action</th>
                                        @endcan
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($lowongan as $lp)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ $lp->nama_pekerjaan }}</td>
                                        <td class="text-center"><br><img width="100px" height="70px" src="{{ asset('storage/' . $lp->foto) }}">
                                            <br>{{ $lp->perusahaan }}</td>
                                        <td class="text-center">{{ $lp->kategori->nama_kategori }}</td>
                                        <td class="text-center">{{ $lp->tipe_pekerjaan }}</td>
                                        <td class="text-center">{{ $lp->deskripsi }}</td>
                                        <!-- CheckBox Status -->
                                        @cannot('admin')
                                        <td class="text-center"> 
                                            <input data-id="{{$lp->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $lp->status ? 'checked' : '' }}> 
                                        </td>
                                        @endcannot

                                        @can('admin')
                                            <td class="text-center">{{ $lp->contact_person }}</td>
                                            <td class="text-center">{{ $lp->no_telp }}</td>
                                        @endcan
                                        @cannot('admin')
                                            <td class="text-center">
                                                <div class="form-group col-md-1">
                                                    {{-- <a></a> --}}
                                                </div>
                                                <div class="form-group col-md-1">
                                                    <a href="{{ route('lowonganpekerjaan.edit', $lp->id) }}"
                                                        class="btn btn-warning"><i class="fas fa-pencil-ruler"></i></a>
                                                </div>
                                                
                                                <div class="form-group col-md-1">
                                                    <form action="{{ route('lowonganpekerjaan.destroy', $lp->id) }}"
                                                        method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button class="btn btn-danger show_confirm" type="submit"><i class="fas fa-trash-alt"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        @endcan
                                    </tr>
                                    @endforeach
                                    </tr>
                                </tbody>
                            </table>
                            <div class="form-row">
                                <div class="form-group col-md-9">
                                    <p>Showing
                                        {{ $lowongan->firstItem() }}
                                        to
                                        {{ $lowongan->lastItem() }}
                                        of
                                        {{ $lowongan->total() }}
                                        entries
                                    </p>
                                </div>
                                <div class="form-group col-md-3">
                                    {{ $lowongan->links() }}
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
<!-- Toggle -->
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script>
    $(function() { 
            $('.toggle-class').change(function() { 
            var status = $(this).prop('checked') == true ? 1 : 0;  
            var id = $(this).data('id');  
            $.ajax({ 
     
                type: "GET", 
                dataType: "json", 
                url: '/status/update', 
                data: {'status': status, 'id': id}, 
                success: function(data){ 
                console.log(data.success) 
             } 
          }); 
       }) 
    }); 

    $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
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

