@extends('newlayouts.main')

@section('maps', 'active')

@section('icon', 'fas fa-map-marked-alt')
@section('judul', 'MAPS LOWONGAN')


@section('content')
  <div class="alert alert-light alert-has-icon">
    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
    <div class="alert-body">
      <div class="alert-title">INFO</div>
        Belum ada lowongan pekerjaan untuk ditampilkan
    </div>
  </div>
    <div id="map" class="map-new-look">
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
                    div.innerHTML = '<form><id="command" type="text"/><strong><b>Pilih Radius</b></strong></form>'+
                    '<form><input id="command" type="checkbox" /> 10 KM</form>'+
                    '<form><input id="command2" type="checkbox"/> 5 KM</form>'+
                    '<form><input id="command3" type="checkbox"/> 3 KM</form>'+
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
            
        </script>
    </div>
@endsection
