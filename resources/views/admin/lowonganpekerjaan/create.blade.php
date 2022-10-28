@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid">
        <form class="form-horizontal" method="post" action="/dashboard/lowonganpekerjaan" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <h4 class="card-title d-flex justify-content-center">Create Data</h4>
                <br>
                <div class="form-group row mb-2">
                    <label for="nama_pekerjaan" class="col-sm-3 text-end control-label col-form-label">Nama Pekerjaan</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-plaintext @error('nama_pekerjaan') is-invalid @enderror"
                          id="nama_pekerjaan" name="nama_pekerjaan" placeholder="Enter Nama Pekerjaan" required
                          value="{{ old('nama_pekerjaan') }}" autofocus />
                        @error('nama_pekerjaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="pemilik" class="col-sm-3 text-end control-label col-form-label">Perusahaan</label>
                    <div class="col-md-6">
                      <input type="text" class="form-control form-control-plaintext @error('perusahaan') is-invalid @enderror"
                            id="perusahaan" name="perusahaan" placeholder="Enter Perusahaan" required
                            value="{{ auth()->user()->perusahaan }}" readonly />
                        @error('perusahaan')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="kategori" class="col-sm-3 text-end control-label col-form-label">Kategori</label>
                    <div class="col-md-6">
                        <select class="form-control form-control-plaintext @error('kategori_id') is-invalid @enderror"
                            id="kategori_id" name="kategori_id" required>
                            <option value="">--Pilih Kategori Pekerjaan--</option>
                            @foreach ($kategori as $data)
                                <option value="{{$data->id}}" {{old('kategori_id') == $data->id ? 'selected' : ''}}>{{$data->nama_kategori}}</option>
                            @endforeach
                        </select>
                        @error('kategori_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                  <label for="tipe_pekerjaan" class="col-sm-3 text-end control-label col-form-label">Tipe Pekerjaan</label>
                  <div class="col-md-6">
                      <select class="form-control form-control-plaintext @error('tipe_pekerjaan') is-invalid @enderror"
                          id="tipe_pekerjaan" name="tipe_pekerjaan" required>
                          {{-- <option value="">--Pilih Tipe Pekerjaan--</option> --}}
                          <option value="Part Time" {{old('tipe_pekerjaan') == 'Part Time' ? 'selected' : ''}}>Part Time</option>
                          <option value="Full Time" {{old('tipe_pekerjaan') == 'Full Time' ? 'selected' : ''}}>Full Time</option>
                      </select>
                      @error('kategori_id')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
              </div>

                <div class="form-group row mb-2">
                    <label for="deskripsi" class="col-sm-3 text-end control-label col-form-label">Deskripsi</label>
                    <div class="col-md-6">
                        <textarea class="form-control form-control-plaintext"
                            id="deskripsi" name="deskripsi" placeholder="Keterangan" value="{{ old('deskripsi') }}" required></textarea>
                        @error('deskripsi')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="customer_service" class="col-sm-3 text-end control-label col-form-label">Customer Service</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-plaintext @error('customer_service') is-invalid @enderror"
                            id="customer_service" name="customer_service" placeholder="Enter Customer Service's Name"
                            required value="{{ auth()->user()->nama }}" readonly />
                        @error('customer_service')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="form-group row mb-2">
                    <label for="no_telp" class="col-sm-3 text-end control-label col-form-label">Nomor Telepon</label>
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-plaintext @error('no_telp') is-invalid @enderror"
                            id="no_telp" name="no_telp" placeholder="Enter Phone Number" required
                            value="{{ auth()->user()->no_telp }}" readonly />
                        @error('no_telp')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>


                <div class="form-group row mb-2">
                    <label for="x" class="col-sm-3 text-end control-label col-form-label">Latitude</label>
                    <div class="col-md-6">
                        <input type="text"
                            class="form-control form-control-plaintext @error('x')
                    is-invalid
                @enderror"
                            id="x" name="x" placeholder="Enter Latitude" required value="{{ old('x') }}"
                            readonly />
                        @error('x')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-2">
                    <label for="y" class="col-sm-3 text-end control-label col-form-label">Longitude</label>
                    <div class="col-md-6">
                        <input type="text"
                            class="form-control form-control-plaintext @error('y')
                    is-invalid
                @enderror"
                            id="y" name="y" placeholder="Enter Longitude" required
                            value="{{ old('y') }}" readonly />
                        @error('y')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-body border-top mb-lg-2">
                <div class="card-body d-flex justify-content-center mt-2">
                    <a href="{{ route('lowonganpekerjaan.index') }}" class="btn btn-info me-1"><i data-feather="arrow-left"></i></a>
                    <button type="submit" class="btn btn-success">
                        <i data-feather="file-plus"></i>
                    </button>
                </div>
            </div>
        </form>
        <div id="map" style="height: 500px; margin-top: 50px;">
            <script>
                function showPreview(objFileInput) {
                    if (objFileInput.files[0]) {
                        var fileReader = new FileReader();
                        fileReader.onload = function(e) {
                            $('#blah').attr('src', e.target.result);
                            $("#targetLayer").html('<img src="' + e.target.result + '" class="img-fluid w-25 h-25 m-md-2" />');
                            $("#targetLayer").css('opacity', '0.7');
                            $(".icon-choose-image").css('opacity', '0.5');
                        }
                        fileReader.readAsDataURL(objFileInput.files[0]);
                    }
                }

                var curLocation = [0, 0];
                if (curLocation[0] == 0 && curLocation[1] == 0) {
                    curLocation = [-7.9440167, 112.6151627];
                }

                var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                    osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                    osm = L.tileLayer(osmUrl, {
                        maxZoom: 18,
                        attribution: osmAttrib
                    });

                var map = L.map('map').setView([-7.9439407, 112.6150103], 17).addLayer(osm);

                map.attributionControl.setPrefix(false);
                var marker = new L.marker(curLocation, {
                    draggable: 'true'
                });

                marker.on('dragend', function(event) {
                    var position = marker.getLatLng();
                    marker.setLatLng(position, {
                        draggable: 'true'
                    }).bindPopup(position).update();
                    //id (longitude atau latitude) pada blade html akan dikenali sebagai identitas tempat untuk menempatkan hasil marker pada peta
                    $("#x").val(position.lat);
                    $("#y").val(position.lng).keyup();
                });

                //Nilai longitude dan latitude berubah seiring berubahnya posisi marker
                $("#x, #y").change(function() {
                    var position = [parseInt($("#x").val()), parseInt($("#y").val())];
                    marker.setLatLng(position, {
                        draggable: 'true'
                    }).bindPopup(position).update();
                    map.panTo(position);
                });
                map.addLayer(marker);
            </script>
        </div>
    </div>
@endsection
