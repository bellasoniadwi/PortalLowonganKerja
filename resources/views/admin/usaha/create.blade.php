@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
  <form class="form-horizontal" method="post" action="/dashboard/toko" enctype="multipart/form-data">
    @csrf
    <div class="card-body">
      <h4 class="card-title d-flex justify-content-center">Create Data</h4>
      <div class="form-group row mb-2">
        <label for="nama" class="col-sm-3 text-end control-label col-form-label">Nama Usaha</label>
        <div class="col-md-6">
          <input type="text" class="form-control form-control-plaintext @error('nama')
                    is-invalid
                @enderror" id="nama" name="nama" placeholder="Enter Nama" required value="{{ old('nama') }}" autofocus />
          @error('nama')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="pemilik" class="col-sm-3 text-end control-label col-form-label">Pemilik Usaha</label>
        <div class="col-md-6">
          <input type="text" class="form-control form-control-plaintext @error('pemilik')
                    is-invalid
                @enderror" id="pemilik" name="pemilik" placeholder="Enter Owners" required value="{{ auth()->user()->nama }}" readonly/>
          @error('pemilik')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="no_hp" class="col-sm-3 text-end control-label col-form-label">No Telepon</label>
        <div class="col-md-6">
          <input type="text" class="form-control form-control-plaintext @error('no_hp')
                    is-invalid
                @enderror" id="no_hp" name="no_hp" placeholder="Enter Phone Number" required value="{{ auth()->user()->no_telp }}"/>
          @error('no_hp')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="jam_buka" class="col-sm-3 text-end control-label col-form-label">Jam Buka</label>
        <div class="col-md-6">
          <input type="time" class="form-control form-control-plaintext @error('jam_buka')
                    is-invalid
                @enderror" id="jam_buka" name="jam_buka" placeholder="Enter Open Time" required value="{{ old('jam_buka') }}"/>
          @error('jam_buka')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="jam_tutup" class="col-sm-3 text-end control-label col-form-label">Jam Tutup</label>
        <div class="col-md-6">
          <input type="time" class="form-control form-control-plaintext @error('jam_tutup')
                    is-invalid
                @enderror" id="jam_tutup" name="jam_tutup" placeholder="Enter Close Time" required value="{{ old('jam_tutup') }}"/>
          @error('jam_tutup')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mt-2">
        <label for="alamat" class="col-sm-3 text-end control-label col-form-label">Alamat</label>
        <div class="col-md-6">
          <input type="text" class="form-control form-control-plaintext @error('alamat')
                    is-invalid
                @enderror" id="alamat" name="alamat" placeholder="Enter Address" required value="{{ old('alamat') }}" />
          @error('alamat')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
          @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="image" class="col-sm-3 text-end control-label col-form-label"><i data-feather="image"></i></label>
        <div class="col-md-6 mt-2">
            <div id="targetLayer"></div>
            <div class="icon-choose-image"></div>
            <input type="file" class="form-control form-control-file" id="image" name="image" onchange="return showPreview(this)">
            @error('image')
                <div class="invalid-feedback">
                {{ $message }}
                </div>
            @enderror
        </div>
      </div>
      <div class="form-group row mb-2">
        <label for="x" class="col-sm-3 text-end control-label col-form-label">Latitude</label>
        <div class="col-md-6">
          <input type="text" class="form-control form-control-plaintext @error('x')
                    is-invalid
                @enderror" id="x" name="x" placeholder="Enter Latitude" required value="{{ old('x') }}" readonly />
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
          <input type="text" class="form-control form-control-plaintext @error('y')
                    is-invalid
                @enderror" id="y" name="y" placeholder="Enter Longitude" required value="{{ old('y') }}" readonly />
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
        <a href="{{ route('titik.index') }}" class="btn btn-info me-1"><i data-feather="arrow-left"></i></a>
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
                fileReader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                    $("#targetLayer").html('<img src="'+e.target.result+'" class="img-fluid w-25 h-25 m-md-2" />');
                    $("#targetLayer").css('opacity','0.7');
                    $(".icon-choose-image").css('opacity','0.5');
                }
                fileReader.readAsDataURL(objFileInput.files[0]);
            }
        }

      var curLocation = [0, 0];
      if (curLocation[0] == 0 && curLocation[1] == 0) {
        curLocation = [-7.9440167,112.6151627];
      }

      var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png'
        , osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        , osm = L.tileLayer(osmUrl, {
          maxZoom: 18
          , attribution: osmAttrib
        });

      var map = L.map('map').setView([-7.9439407,112.6150103], 17).addLayer(osm);

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
