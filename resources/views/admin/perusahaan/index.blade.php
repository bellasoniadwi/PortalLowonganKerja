@extends('newlayouts.main')

@section('perusahaan', 'active')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}" ><i class="fas fa-desktop"></i> Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('perusahaan.index') }}"><i class="fas fa-city"></i> Perusahaan</a></div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Perusahaan</h4>
                    </div>
                    <div class="card-body">
                        {{-- <a href="/dashboard/toko/create" class="btn btn-primary"> + Tambah </a> --}}
                        <div class="float-right">
                            <form action="{{ url()->current() }}" method="GET">
                              <div class="input-group">
                                <input type="text" class="form-control" placeholder="Cari .." aria-label="Search" name="keyword" value="{{ request('keyword') }}" required>
                                <div class="input-group-append">                                            
                                  <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                              </div>
                            </form>
                          </div>
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Perusahaan</th>
                                        <th>Contact Person</th>
                                        <th>Nomor Telepon</th>
                                        <th>Email</th>
                                        <th>Status Aktif</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($user as $us)
                                    <tr>
                                        <td scope="row">{{ ++$i }}</td>
                                        <td>{{ $us->perusahaan }}</td>
                                        <td>{{ $us->nama }}</td>
                                        <td>{{ $us->no_telp }}</td>
                                        <td>{{ $us->email }}</td>
                                        <td class="text-center">
                                            <label class="custom-switch mt-2">
                                            <input id="checkbox" data-id="{{$us->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $us->is_active ? 'checked' : '' }}> 
                                            <span class="custom-switch-description">Diizinkan</span>
                                            </label>
                                        </td>
                                        <td class="text-center">
                                            <div class="form-row">
                                                <div class="form-group col-md-1 text-left">
                                                    <br>
                                                <form action="/dashboard/perusahaan/{{ $us->id }}" method="post">
                                                    @method('delete')
                                                    @csrf
                                                    <button id="hapus" href="/dashboard/perusahaan/{{ $us->id }}"
                                                        class="btn btn-danger show_confirm" type="submit"><i
                                                            class="fas fa-trash-alt"></i></button>
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
                                        {{ $user->firstItem() }}
                                        to
                                        {{ $user->lastItem() }}
                                        of
                                        {{ $user->total() }}
                                        entries
                                    </p>
                                </div>
                                <div class="form-group col-md-3">
                                    {{ $user->links() }}
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
            var is_active = $(this).prop('checked') == true ? 1 : 0;  
            var id = $(this).data('id');  
            $.ajax({ 
     
                type: "GET", 
                dataType: "json", 
                url: '/allowuser/update', 
                data: {'is_active': is_active, 'id': id}, 
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
                swal("Kontributor batal dihapus!");
            }
          });
      });
 </script>
@endsection