<link href="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/v2.10.0/mapbox-gl.js"></script>
<style>
#map { height: 50vh; width: 100%; margin: auto; margin-top: 2px; }
#map input{ border: none; width: 100%; margin: 0; }
</style>

<!-- Load the `mapbox-gl-geocoder` plugin. -->
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">
 
<div id="map"></div>
 
<script>
	mapboxgl.accessToken = 'pk.eyJ1Ijoib3JqZXZxcmVzdHhzcGl4IiwiYSI6ImNsOTRkeXh6aTAza3Izbm5tb21yOW1zNzUifQ.J82Z2n5o4ct2-UnoX2FtRg';
const map = new mapboxgl.Map({
container: 'map',
// Choose from Mapbox's core styles, or make your own style with Mapbox Studio
style: 'mapbox://styles/mapbox/streets-v11',
center: [-79.4512, 43.6568],
zoom: 13
});


map.addControl(
new MapboxGeocoder({
accessToken: mapboxgl.accessToken,
mapboxgl: mapboxgl
})
);
 
var marker = new mapboxgl.Marker();

function add_marker (event) {
  var coordinates = event.lngLat;
  marker.setLngLat(coordinates).addTo(map);
  document.getElementById("location").value = coordinates.lng + ', ' + coordinates.lat;
}


map.on('click', add_marker);

</script>