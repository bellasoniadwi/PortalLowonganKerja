@extends('newlayouts.main')

@section('maps', 'active')

@section('icon', 'fas fa-binoculars')
@section('judul', 'DETAIL LOWONGAN PEKERJAAN')

@section('content')
    <div class="col-12 col-md-12 col-lg-12">
        <div class="card">
            <div class="card-header">
                <h4>Detail Data {{ $lowongan->nama_pekerjaan }} di {{ $lowongan->perusahaan }}</h4>
            </div>
            <div class="card-body">
                <div id="accordion">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-1" aria-expanded="true">
                                    <h4>Nama Pekerjaan</h4>
                                </div>
                                <div class="accordion-body collapse show" id="panel-body-1" data-parent="#accordion">
                                    <p class="mb-0">{{ $lowongan->nama_pekerjaan }}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-2">
                                    <h4>Kategori</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-2" data-parent="#accordion">
                                    <p class="mb-0">{{ $lowongan->kategori }}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-3">
                                    <h4>Gaji</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-3" data-parent="#accordion">
                                    <p class="mb-0">
                                        @if ($lowongan->gaji == '-')
                                            Tidak Dicantumkan
                                        @else
                                            {{ $lowongan->gaji }}
                                        @endif
                                    </p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-4">
                                    <h4>Perusahaan</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-4" data-parent="#accordion">
                                    <p class="mb-0">{{ $lowongan->perusahaan }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-5">
                                    <h4>Tipe Pekerjaan</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-5" data-parent="#accordion">
                                    <p class="mb-0">{{ $lowongan->tipe_pekerjaan }}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-6">
                                    <h4>Jumlah Jam Kerja</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-6" data-parent="#accordion">
                                    <p class="mb-0">{{ $lowongan->jam_kerja }}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-7">
                                    <h4>Deskripsi</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-7" data-parent="#accordion">
                                    <p class="mb-0">{{ $lowongan->deskripsi }}</p>
                                </div>
                            </div>
                            <div class="accordion">
                                <div class="accordion-header" role="button" data-toggle="collapse"
                                    data-target="#panel-body-8">
                                    <h4>Contact Person</h4>
                                </div>
                                <div class="accordion-body collapse" id="panel-body-8" data-parent="#accordion">
                                    <p class="mb-0">{{ $lowongan->contact_person }} - {{ $lowongan->no_telp }}</p>
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
                curLocation = [<?= $kordinats[0]->x ?>, <?= $kordinats[0]->y ?>]
            }
            var osmUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',
                osmAttrib = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
                osm = L.tileLayer(osmUrl, {
                    maxZoom: 18,
                    attribution: osmAttrib
                });
            var map = L.map('map').setView([<?= $kordinats[0]->x ?>, <?= $kordinats[0]->y ?>], 13).addLayer(osm);

            map.locate({
                setView: true,
                maxZoom: 16
            });

            navigator.geolocation.getCurrentPosition(function(location) {
                var latlng = new L.LatLng(location.coords.latitude, location.coords.longitude);
                // alert(latlng);
                // var marker = L.marker(latlng).addTo(map);

                var marker = L.marker(latlng).addTo(map).bindPopup('Lokasi Saya').openPopup();
                dariSini(location.coords.latitude, location.coords.longitude);
                //var marker = L.marker(latlng).addTo(map).bindPopup('<button class="btn btn-info btn-sm mb-2" onclick="dariSini(\''+ location.coords.latitude, location.coords.longitude +'\')" block>Dari Sini</button>'+
                //    '<br><button class="btn btn-info btn-sm mb-2" onclick="keSini(\''+ location.coords.latitude, location.coords.longitude +'\')" block>Ke Sini</button>');
            });


            // function onAccuratePositionProgress (e) {
            //     console.log(e.accuracy);
            //     console.log(e.latlng);
            // }

            // function onAccuratePositionFound (e) {
            //     console.log(e.accuracy);
            //     console.log(e.latlng);
            // }

            // function onAccuratePositionError (e) {
            //     console.log(e.message)
            // }

            // map.on('accuratepositionprogress', onAccuratePositionProgress);
            // map.on('accuratepositionfound', onAccuratePositionFound);
            // map.on('accuratepositionerror', onAccuratePositionError);

            // map.findAccuratePosition({
            //     maxWait: 15000, // defaults to 10000
            //     desiredAccuracy: 30 // defaults to 20
            // });

            var data = [
                <?php foreach ($kordinats as $key => $value) { ?> {
                    "lokasi": [<?= $value->x ?>, <?= $value->y ?>],
                    "nama_pekerjaan": "<?= $value->nama_pekerjaan ?>"
                },
                <?php } ?>
            ];

            //layer contain searched elements
            var markersLayer = new L.LayerGroup();
            map.addLayer(markersLayer);

            //Routing Machine Liedman
            var control = L.Routing.control({
                    //ambil koordinat berada sekarang
                    waypoints: [
                        //L.latLng(-0.5516380071640015, 117.11798858642578),
                        //.latLng(curr_latitude, curr_longitude),
                        //L.latLng(-0.5504058599472046, 117.12004852294922)
                    ],
                    routeWhileDragging: true,
                    geocoder: L.Control.Geocoder.nominatim()
                })
                .on('routesfound', function(e) {
                    var routes = e.routes;
                    alert('Found ' + routes.length + ' route(s).');
                })
                .addTo(map);

            function dariSini(lat, lng) {
                var latLng = L.latLng(lat, lng);
                control.spliceWaypoints(0, 1, latLng);
            }

            function keSini(lat, lng) {
                var latLng = L.latLng(lat, lng);
                control.spliceWaypoints(control.getWaypoints().length - 1, 1, latLng);
            }
        
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
                        var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);
        
                        L.circleMarker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map).bindPopup(
                            '<img width="200px" height="100px" src="{{ asset('storage/' . $data->foto) }}">' +
                            '<br><br><pre>Pekerjaan : ' + '<?= $data->nama_pekerjaan ?>     ' + '<br>Lokasi    : ' +
                            '<?= $data->perusahaan ?>     ' + '<br>CP        : ' + '<?= $data->contact_person ?>     ' +
                            '<br>Kontak    : ' + '<?= $data->no_telp ?>' +
                            '<br>Gaji      : ' + '<?= $data->gaji ?>' + '<br>Kategori  : ' + '<?= $data->kategori ?></pre>'+
                    '<br><br><button class="btn btn-info btn-sm mb-2" onclick="dariSini(<?= $data->x ?>, <?= $data->y ?>)">Dari Sini</button>' +
                    '        <button class="btn btn-info btn-sm mb-2" onclick="keSini(<?= $data->x ?>, <?= $data->y ?>)">Ke Sini</button>' +'<br>').openPopup();
                        <?php } ?>
                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
