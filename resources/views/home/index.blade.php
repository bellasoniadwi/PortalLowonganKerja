@extends('newlayouts.main')

@section('maps', 'active')

@section('icon', 'fas fa-map-marked-alt')
@section('judul', 'MAPS LOWONGAN')


@section('content')
  <div class="alert alert-light alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
      <div class="alert-title">INFO</div>
        Apabila sistem tidak menemukan lokasi anda secara tepat, muat ulang halaman website. Mohon maaf atas ketidaknyamanannya
    </div>
  </div>
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

                    div.innerHTML = '<form><id="command" type="text"/><b><strong>Filter Lokasi</form>'+
                    '<form><input id="command" type="checkbox"/> 10 KM</form>'+
                    '<form><input id="command2" type="checkbox"/> 5 KM</form>'+
                    '<form><input id="command3" type="checkbox"/> 3 KM</form>'+
                    '<form><input id="command0" type="checkbox"/> 0 KM</strong></b></form>';
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
@endsection
