@extends('newlayouts.main')

@section('faqs', 'active')

@section('content')
    <div class="section-header">
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}"><i class="fas fa-desktop"></i> Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('faq.index') }}"><i class="fas fa-comment-alt"></i> FAQ</a></div>
            <div class="breadcrumb-item"><a href="/dashboard/faq/{{ $faq->id }}/edit"><i class="fas fa-pencil-ruler"></i> Edit FAQ</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form method="post" action="/dashboard/faq/{{ $faq->id }}">
                    @method('put')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Edit Pertanyaan</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped" id="table-1">
                            <thead>
                                <tr>
                                    <th class="text-center">Pertanyaan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">{{ $faq->pertanyaan }}</td>
                                </tr>
                            </tbody>
                                </table>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="jawaban">Jawaban Anda</label>
                                    <textarea type="text" class="form-control @error('jawaban') is-invalid @enderror"
                                        id="jawaban" name="jawaban" placeholder="Tuliskan jawaban atas pertanyaan yang ada" required
                                        value="{{ old('jawaban', $faq->jawaban) }}">{{ old('jawaban', $faq->jawaban) }}</textarea>
                                    @error('jawaban')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-5">
                                    
                              </div>
                                <div class="form-group col-md-1">
                                    <a href="{{ route('faq.index') }}" class="btn btn-primary">Back</a>
                                </div>
                                <div class="form-group col-md-6">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
