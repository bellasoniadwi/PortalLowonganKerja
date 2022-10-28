@extends('admin.layouts.main')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="text-center my-3">
    @if($kordinats[0]->image)
      <img src="{{ asset('storage/'. $kordinats[0]->image) }}" class="card-img-top" alt="{{ $kordinats[0]->nama }}">
    @else
      <img src="https://source.unsplash.com/1200x400?{{ $kordinats[0]->nama }}" class="card-img-top" alt="{{ $kordinats[0]->nama }}">
    @endif
      <div class="card-body">
        <h5 class="card-title">{{ $kordinats[0]->nama }}</h5>
        <p class="card-text">{{ $kordinats[0]->alamat }}</p>
        <div class="row">
            <p class="card-text col-md-6"><small class="text-dark"><i data-feather="clock"></i> Jam buka : {!! \Carbon\Carbon::parse($kordinats[0]->jam_buka)->format('H:i') !!} WITA</small></p>
            <p class="card-text col-md-6"><small class="text-dark"><i data-feather="clock"></i> Jam tutup : {!! Carbon\Carbon::parse($kordinats[0]->jam_tutup)->format('H:i') !!} WITA</small></p>
        </div>
        <div class="row">
            <p class="card-text col-md-6"><small class="text-muted"><i data-feather="plus"></i> {{ $kordinats[0]->created_at->diffForHumans() }}</small></p>
            <p class="card-text col-md-6"><small class="text-muted"><i data-feather="edit"></i> {{ $kordinats[0]->updated_at->diffForHumans() }}</small></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div id="map" style="height: 500px; margin: 50px;">
        <script>
            // var map = L.map('map').setView([-0.471852, 117.160556], 13);
            var curLocation = [0, 0];
            if (curLocation[0] == 0 && curLocation[1] == 0) {
                curLocation = [<?= $kordinats[0]->x ?>, <?= $kordinats[0]->y ?>]
            }
            var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                osm = L.tileLayer(osmUrl, {
                    maxZoom: 18,
                    attribution: osmAttrib
                });
            var map = L.map('map').setView([<?= $kordinats[0]->x ?>, <?= $kordinats[0]->y ?>], 15).addLayer(osm);

            var greenIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            var redIcon = new L.Icon({
                iconUrl: 'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-red.png',
                shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
                iconSize: [25, 41],
                iconAnchor: [12, 41],
                popupAnchor: [1, -34],
                shadowSize: [41, 41]
            });

            <?php foreach ($kordinats as $data) { ?>
                @if(\Carbon\Carbon::now()->format('H:i')>=$data->jam_buka && \Carbon\Carbon::now()->format('H:i:s')<$data->jam_tutup)
                    var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);
                    L.circleMarker([ <?= $data->x ?>, <?= $data->y ?>]).addTo(map)
                    .bindPopup('<?= $data->nama ?>'+ '<br>' + '<?= $data->alamat ?>' + '<br>' + '<?= $data->no_hp ?>' +'<br>'+
                        '<button class="btn btn-info mb-2" onclick="dariSini(<?= $data->x ?>, <?= $data->y ?>)">Dari Sini</button>'+
                        '<br><button class="btn btn-info mb-2" onclick="keSini(<?= $data->x ?>, <?= $data->y ?>)">Ke Sini</button>'+
                        '<br><a href="/dashboard/titik/<?= strtolower($data->nama) ?>" class="text-decoration-none text-dark">Selengkapnya</a>')
                    .openPopup();
                @else
                    var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>],{icon: redIcon}).addTo(map);
                @endif
                    markerLayers.bindPopup('<?= $data->nama ?>'+ '<br>' + '<?= $data->alamat ?>' + '<br>' + '<?= $data->no_hp ?>' +'<br> Jam Operasional : '+' <?= $data->jam_buka ?>' +' : '+'<?= $data->jam_tutup ?>' +'<br>'+'{!! \Carbon\Carbon::now()->format('H:i:s')>=$data->jam_buka&&\Carbon\Carbon::now()->format('H:i:s')<$data->jam_tutup?'<span class="text-success"> Buka</span>':'<span class=" text-danger"> Tutup</span>' !!}' +'<br><br>'+
                        '<button class="btn btn-info btn-sm mb-2" onclick="dariSini(<?= $data->x ?>, <?= $data->y ?>)">Dari Sini</button>'+
                        '<br><button class="btn btn-info btn-sm mb-2" onclick="keSini(<?= $data->x ?>, <?= $data->y ?>)">Ke Sini</button>'+
                        '<br><a href="/dashboard/titik/<?= strtolower($data->nama) ?>" class="text-decoration-none text-dark">Selengkapnya</a>');
                <?php } ?>

        </script>
    </div>
</div>
@endsection
