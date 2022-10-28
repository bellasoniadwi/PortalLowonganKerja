@extends('layouts.main')

@section('content')
<div class="container">
  <div class="row">
    <div class="card text-center my-3">
    @if($maps[0]->image)
      <img src="{{ asset('storage/'. $maps[0]->image) }}" class="card-img-top" alt="{{ $maps[0]->nama }}">
    @else
      <img src="https://source.unsplash.com/1200x400?{{ $maps[0]->nama }}" class="card-img-top" alt="{{ $maps[0]->nama }}">
    @endif
      <div class="card-body">
        <h5 class="card-title">{{ $maps[0]->nama }}</h5>
        <p class="card-text">{{ $maps[0]->alamat }}</p>
      </div>
    </div>
  </div>
</div>

<div class="container">
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

        </script>
        @foreach ($maps as $data)
            <script>
                var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);
            </script>
        @endforeach
    </div>
</div>
@endsection
