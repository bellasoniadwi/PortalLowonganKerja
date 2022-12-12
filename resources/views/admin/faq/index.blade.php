@extends('newlayouts.main')

@section('faqs', 'active')

@section('content')
    <div class="section-header">
        {{-- <h1>DataTables</h1> --}}
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-desktop"></i> Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('faq.index') }}"><i class="fas fa-comment-alt"></i> FAQ</a></div>
        </div>
    </div>

    <div class="section-body">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>List Pertanyaan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <br>
                            <table class="table table-striped" id="table-1">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Pertanyaan</th>
                                        <th class="text-center">Jawaban</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        @foreach ($faq as $fq)
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">{{ Str::limit($fq->pertanyaan, 50) }}</td>
                                        <td class="text-center">
                                            @if ($fq->jawaban == null)
                                            <a href="/dashboard/faq/{{ $fq->id }}/edit"
                                                class="btn btn-primary">Jawab</a>
                                            @else
                                                {{ Str::limit($fq->jawaban, 50) }}
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            @if ($fq->jawaban == null)
                                                <div class="badge badge-warning">Belum Terjawab</div>
                                            @else
                                                <div class="badge badge-success">Terjawab</div>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <div class="form-row">
                                                {{-- <div class="form-group col-md-4">
                                                </div> --}}
                                                <div class="form-group col-md-7">
                                                    <a id="edit" href="/dashboard/faq/{{ $fq->id }}/edit"
                                                        class="btn btn-warning"><i class="fas fa-pencil-ruler"></i></a>
                                                </div>
                                                
                                                <div class="form-group col-md-2">
                                                    <form action="/dashboard/faq/{{ $fq->id }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button id="hapus" href="/dashboard/faq/{{ $fq->id }}"
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
                                        {{ $faq->firstItem() }}
                                        to
                                        {{ $faq->lastItem() }}
                                        of
                                        {{ $faq->total() }}
                                        entries
                                    </p>
                                </div>
                                <div class="form-group col-md-3">
                                    {{ $faq->links() }}
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
