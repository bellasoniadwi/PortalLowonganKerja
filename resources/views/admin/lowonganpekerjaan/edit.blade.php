@extends('newlayouts.main')

@section('lowonganpekerjaan', 'active')

@section('content')
    <div class="section-header">
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="{{ route('lowonganpekerjaan.index') }}">Perusahaan</a></div>
            <div class="breadcrumb-item"><a href="/dashboard/lowonganpekerjaan/{{ $lowongan->id }}/edit">Edit Kategori</a>
            </div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12">
                <form method="post" action="/dashboard/lowonganpekerjaan/{{ $lowongan->id }}">
                    @method('put')
                    @csrf
                    <div class="card">
                        <div class="card-header">
                            <h4>Form Edit Data Lowongan Pekerjaan</h4>
                            <input type="hidden" name="oldImage" value="{{ $lowongan->image }}">
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nama_pekerjaan">Nama Pekerjaan</label>
                                    <input type="text" class="form-control @error('nama_pekerjaan') is-invalid @enderror"
                                        id="nama_pekerjaan" name="nama_pekerjaan" placeholder="Nama Pekerjaan" required
                                        value="{{ old('nama_pekerjaan', $lowongan->nama_pekerjaan) }}">
                                    @error('nama_pekerjaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="contact_person">Contact Person</label>
                                    <input type="text" class="form-control @error('contact_person') is-invalid @enderror"
                                        id="contact_person" name="contact_person" placeholder="Contact Person" required
                                        value="{{ old('contact_person', $lowongan->contact_person) }}">
                                    @error('contact_person')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="perusahaan">Perusahaan</label>
                                    <input type="text" class="form-control @error('perusahaan') is-invalid @enderror"
                                        id="perusahaan" name="perusahaan" placeholder="Nama Perusahaan" required
                                        value="{{ old('perusahaan', $lowongan->perusahaan) }}" readonly>
                                    @error('perusahaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="no_telp">Nomor Telepon</label>
                                    <input type="text" class="form-control @error('no_telp') is-invalid @enderror"
                                        id="no_telp" name="no_telp" placeholder="Nomor Telepon" required
                                        value="{{ old('no_telp', $lowongan->no_telp) }}" readonly>
                                    @error('no_telp')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="kategori_id">Kategori</label>
                                    <select class="form-control select2 @error('kategori_id') is-invalid @enderror"
                                        id="kategori_id" name="kategori_id" required>
                                        <option value="">--Pilih Kategori Pekerjaan--</option>
                                        @foreach ($kategori as $data)
                                            <option value="{{ $data->id }}"
                                                {{ old('kategori_id') == $data->id ? 'selected' : '' }}>
                                                {{ $data->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_id')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="x">Latitude</label>
                                    <input type="text" class="form-control @error('x') is-invalid @enderror"
                                        id="x" name="x" placeholder="Latitude" required
                                        value="{{ old('x', $lowongan->x) }}" readonly />
                                    @error('x')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-3">
                                    <label for="tipe_pekerjaan">Tipe Pekerjaan</label>
                                    <select class="form-control select2 @error('tipe_pekerjaan') is-invalid @enderror"
                                        id="tipe_pekerjaan" name="tipe_pekerjaan" required>
                                        <option value="">--Pilih Tipe Pekerjaan--</option>
                                        <option value="Part Time"
                                            {{ old('tipe_pekerjaan') == 'Part Time' ? 'selected' : '' }}>Part Time</option>
                                        <option value="Full Time"
                                            {{ old('tipe_pekerjaan') == 'Full Time' ? 'selected' : '' }}>Full Time</option>
                                    </select>
                                    @error('tipe_pekerjaan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-3">
                                    <label for="y">Longitude</label>
                                    <input type="time" class="form-control @error('y') is-invalid @enderror"
                                        id="y" name="y" placeholder="Longitude" required
                                        value="{{ old('y', $lowongan->y) }}">
                                    @error('y')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="deskripsi">Deskripsi</label>
                                    <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"
                                        id="deskripsi" name="deskripsi" placeholder="Deskripsi" required
                                        value="{{ old('deskripsi', $lowongan->deskripsi) }}" readonly />
                                    @error('deskripsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-1">
                                    <a href="{{ route('lowonganpekerjaan.index') }}" class="btn btn-primary">Back</a>
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
                                            curLocation = [<?= $lowongan->x ?>, <?= $lowongan->y ?>];
                                        }

                                        var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                                            osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                                            osm = L.tileLayer(osmUrl, {
                                                maxZoom: 18,
                                                attribution: osmAttrib
                                            });

                                        var map = L.map('map').setView([<?= $lowongan->x ?>, <?= $lowongan->y ?>], 17).addLayer(osm);

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
