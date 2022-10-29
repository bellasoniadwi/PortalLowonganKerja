@extends('newlayouts.main')

@section('perusahaan', 'active')

@section('content')
    <div class="section-header">
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('toko.index') }}">Perusahaan</a></div>
            <div class="breadcrumb-item"><a href="{{ route('toko.create') }}">Tambah Perusahaan</a></div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form method="post" action="/dashboard/toko" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Tambah Data Perusahaan</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama">Nama Perusahaan</label>
                                    <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                        id="nama" name="nama" placeholder="Nama Perusahaan" required
                                        value="{{ old('nama') }}" autofocus>
                                    @error('nama')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="alamat">Alamat</label>
                                    <input type="text" class="form-control @error('alamat') is-invalid @enderror"
                                        id="alamat" name="alamat" placeholder="Alamat" required
                                        value="{{ old('alamat') }}">
                                    @error('alamat')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="pemilik">Pemilik Usaha</label>
                                    <input type="text" class="form-control @error('pemilik') is-invalid @enderror"
                                        id="pemilik" name="pemilik" placeholder="Nama Pemilik" required
                                        value="{{ auth()->user()->nama }}" readonly>
                                    @error('pemilik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="image">Foto Perusahaan</label>
                                    <input type="file" class="form-control @error('image') is-invalid @enderror"
                                        id="image" name="image" placeholder="Upload Image" required
                                        value="{{ old('image') }}" onchange="return showPreview(this)">
                                    @error('image')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="no_hp">Nomor Telepon</label>
                                    <input type="number" class="form-control @error('no_hp') is-invalid @enderror"
                                        id="no_hp" name="no_hp" placeholder="Nomor Telepon" required
                                        value="{{ old('no_hp') }}">
                                    @error('no_hp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="x">Latitude</label>
                                    <input type="text" class="form-control @error('x') is-invalid @enderror"
                                        id="x" name="x" placeholder="Latitude" required
                                        value="{{ old('x') }}" readonly>
                                    @error('x')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="jam_buka">Jam Buka</label>
                                    <input type="time" class="form-control @error('jam_buka') is-invalid @enderror"
                                        id="jam_buka" name="jam_buka" placeholder="Jam Buka" required
                                        value="{{ old('jam_buka') }}">
                                    @error('jam_buka')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="jam_tutup">Jam Tutup</label>
                                    <input type="time" class="form-control @error('jam_tutup') is-invalid @enderror"
                                        id="jam_tutup" name="jam_tutup" placeholder="Jam Tutup" required
                                        value="{{ old('jam_tutup') }}">
                                    @error('jam_tutup')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="y">Latitude</label>
                                    <input type="text" class="form-control @error('y') is-invalid @enderror"
                                        id="y" name="y" placeholder="Longitude" required
                                        value="{{ old('y') }}" readonly>
                                    @error('y')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <a href="{{ route('toko.index') }}" class="btn btn-primary">Back</a>
                                </div>
                                <div class="form-group col-md-11">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12" id="map"
                                    style="height: 500px; margin-top: 50px;">
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
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
