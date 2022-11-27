@extends('newlayouts.main')

@section('icon', 'fa fa-search')
@section('judul', 'HASIL FILTER')


@section('content')
    <div class="row">
        <div class="col-12 col-sm-6 col-md-6 col-lg-9"></div>

        <div class="col-12 col-sm-6 col-md-6 col-lg-3">
            <a href="{{ route('tracking.index') }}" class="btn btn-primary"><i class="fa fa-home"></i> Kembali ke halaman
                sebelumnya</a>
        </div>
    </div>

    <div class="row">
        <div class="section-body">
        <h2 class="section-title">Data berhasil ditemukan !</h2>
        <p class="section-lead">{{$lowongan->total()}} data ditemukan dalam kategori {{ $namakat }}</p>
        </div>
    </div>

    <div class="row">
        @foreach ($lowongan as $lp)
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                <article class="article article-style-b">
                    <div class="article-header">
                        <div class="article-image"><img width="280px" height="150px"
                                src="{{ asset('storage/' . $lp->foto) }}">
                        </div>
                        <div class="article-badge">
                            <div class="article-badge-item bg-danger"><i class="fas fa-clipboard-list"></i>
                                {{ $lp->kategori }}</div>
                        </div>
                    </div>
                    <div class="article-details">
                        <div class="article-title">
                            <h2><a>{{ $lp->nama_pekerjaan }}</a></h2>
                            <h2><a>{{ $lp->perusahaan }}</a></h2>
                        </div>
                        <p>{{ Str::limit($lp->deskripsi, 50) }}</p>
                        <div class="article-cta">
                            <a href="{{ route('lowonganpekerjaan.detail_user', $lp->id) }}">Selengkapnya <i
                                    class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
    <div class="form-row">
        <div class="form-group col-md-12">
            {{ $lowongan->links() }}
        </div>
    </div>
    <div class="row">
        <div id="map" class="map-new-look">
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

                    var marker = L.marker(latlng).addTo(map).bindPopup('Lokasi Saya').openPopup().on('dblclick', onClick);

                    var circle = L.circle([location.coords.latitude, location.coords.longitude], 100, {
                        color: '#00ABB3',
                        fillColor: '#00ABB3',
                        fillOpacity: 0.3
                    }).addTo(map);

                    // create the control
                    var command = L.control({
                        position: 'topleft'
                    });

                    command.onAdd = function(map) {
                        var div = L.DomUtil.create('div', 'command');
                        div.style.backgroundColor = 'white';
                        div.style.padding = "10px"
                        div.style.borderRadius = "5px"
                        div.innerHTML = '<form><id="command" type="text"/><strong><b>Pilih Radius</b></strong></form>' +
                            '<form><input id="command" type="checkbox" /> 10 KM</form>' +
                            '<form><input id="command2" type="checkbox"/> 5 KM</form>' +
                            '<form><input id="command3" type="checkbox"/> 3 KM</form>' +
                            '<form><input id="command0" type="checkbox"/> 0 KM</form>';

                        return div;
                    };

                    command.addTo(map);


                    // add the event handler
                    function handleCommand10() {
                        circle.setRadius(10000);
                    }

                    function handleCommand5() {
                        circle.setRadius(5000);
                    }

                    function handleCommand3() {
                        circle.setRadius(3000);
                    }

                    function handleCommand0() {
                        circle.setRadius(50);
                    }

                    document.getElementById("command").addEventListener("click", handleCommand10, false);
                    document.getElementById("command2").addEventListener("click", handleCommand5, false);
                    document.getElementById("command3").addEventListener("click", handleCommand3, false);
                    document.getElementById("command0").addEventListener("click", handleCommand0, false);

                    function onClick(e) {
                        dariSini(location.coords.latitude, location.coords.longitude);
                    }
                });

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
                        waypoints: [],
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

                //Search dengan menandai titik yang dicari
                map.addControl(new L.Control.Search({
                    layer: markersLayer,
                    initial: false,
                    zoom: 18,
                    collapsed: true,
                }));

                ////////////populate map with markers from sample data
                for (i in data) {
                    var nama_pekerjaan = data[i].nama_pekerjaan; //value searched
                    var lokasi = data[i].lokasi; //position found
                    var marker = new L.circleMarker(new L.latLng(lokasi), {
                        title: nama_pekerjaan
                    }); //see property searched
                    marker.bindPopup('Nama Pekerjaan: ' + nama_pekerjaan);
                    markersLayer.addLayer(marker);
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
            </script>
            @foreach ($kordinats as $data)
                <script>
                    var markerLayers = L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map);

                    L.marker([<?= $data->x ?>, <?= $data->y ?>]).addTo(map).bindPopup(
                        '<img width="200px" height="100px" src="{{ asset('storage/' . $data->foto) }}">' +
                        '<br><br><pre>Pekerjaan : ' + '<?= $data->nama_pekerjaan ?>     ' + '<br>Lokasi    : ' +
                        '<?= $data->perusahaan ?>     ' + '<br>CP        : ' + '<?= $data->contact_person ?>     ' +
                        '<br>Kontak    : ' + '<?= $data->no_telp ?>' +
                        '<br>Gaji      : ' + '<?= $data->gaji ?></pre>' +
                        '<a href="/show/<?= $data->id ?>" class="text-center">Selengkapnya</a>' +
                        '<br><br><button class="btn btn-info btn-sm mb-2" onclick="dariSini(<?= $data->x ?>, <?= $data->y ?>)">Dari Sini</button>' +
                        '        <button class="btn btn-info btn-sm mb-2" onclick="keSini(<?= $data->x ?>, <?= $data->y ?>)">Ke Sini</button>' +
                        '<br>').openPopup();
                </script>
            @endforeach
        </div>
    </div>
@endsection
