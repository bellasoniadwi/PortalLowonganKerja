@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="col-12 mt-lg-2 mb-lg-2">
        <div class="row g-3 mt-lg-1 mb-lg-1">
            <div class="col-md-4">
            @if($maps[0]->image)
                <img src="{{ asset('storage/'. $maps[0]->image) }}" class="img-fluid rounded-start mt-lg-2 mb-lg-2 img-thumbnail" alt="{{ $maps[0]->nama }}">
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $maps[0]->nama }}" class="img-fluid rounded-start mt-lg-2 mb-lg-2 img-thumbnail" alt="{{ $maps[0]->nama }}">
            @endif
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $maps[0]->nama }}</h5>
                    @if($maps[0])
                    <p class="card-text">Alamat : {{ $maps[0]->alamat }}. No HP : {{ $maps[0]->no_hp }}. Owner : {{ $maps[0]->pemilik }}.</p>
                    @else
                    <p class="card-text text-danger">Harap Lengkapi Data</p>
                    @endif
                    <div class="row">
                         <p class="card-text col-md-6"><small class="text-dark"><i data-feather="clock"></i> Jam buka : {!! \Carbon\Carbon::parse($maps[0]->jam_buka)->format('H:i') !!} WITA</small></p>
                        <p class="card-text col-md-6"><small class="text-dark"><i data-feather="clock"></i> Jam tutup : {!! Carbon\Carbon::parse($maps[0]->jam_tutup)->format('H:i') !!} WITA</small></p>
                    </div>
                    <div class="row">
                        <p class="card-text col-md-6"><small class="text-muted"><i data-feather="plus"></i> {{ $maps[0]->created_at->diffForHumans() }}</small></p>
                        <p class="card-text col-md-6"><small class="text-muted"><i data-feather="edit"></i> {{ $maps[0]->updated_at->diffForHumans() }}</small></p>
                    </div>
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
            curLocation = [<?= $maps[0]->x ?>, <?= $maps[0]->y ?>]
        }
        var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
            osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
            osm = L.tileLayer(osmUrl, {
                maxZoom: 18,
                attribution: osmAttrib
            });
        var map = L.map('map').setView([<?= $maps[0]->x ?>, <?= $maps[0]->y ?>], 15).addLayer(osm);

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

        <?php foreach ($maps as $data) { ?>
                @if(\Carbon\Carbon::now()->format('H:i:s')>=$data->jam_buka && \Carbon\Carbon::now()->format('H:i:s')<$data->jam_tutup)
                    var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);

                @else
                    var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>],{icon: redIcon}).addTo(map);
                @endif
                    markerLayers.bindPopup('<?= $data->nama ?>'+ '<br>' + '<?= $data->alamat ?>' + '<br>' + '<?= $data->no_hp ?>' +'<br> Jam Operasional : '+' <?= $data->jam_buka ?>' +' : '+'<?= $data->jam_tutup ?>' +'<br>'+'{!! \Carbon\Carbon::now()->format('H:i:s')>=$data->jam_buka&&\Carbon\Carbon::now()->format('H:i:s')<$data->jam_tutup?'<span class="text-success"> Buka</span>':'<span class=" text-danger"> Tutup</span>' !!}');
        <?php } ?>

    </script>
    </div>
</div>
@endsection
