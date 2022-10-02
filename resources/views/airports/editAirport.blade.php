@extends('layout')
@section('content')
     
     <div class="main">
    <h1>Let's edit a airport!</h1>
    <form action="">
    <label for="airportname">Name</label>
    <input style="margin-bottom: 2px" type="text" name="airportname" placeholder="Airport name">
    <br>
    <label>Country</label>
    <select>
        <option>Select country</option>
    </select>

    <br>
    <br>

<script src="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css" rel="stylesheet">
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v5.0.0/mapbox-gl-geocoder.css" type="text/css">


    <label for="location" class="form-label">Location</label>
    <input style="width: 100%;" type="text" id="location" name="location" value="17.66745457754439 8.072582992913183" readonly="">
    <div id="map" style="width: 100%; height: 500px;" class="mapboxgl-map"><div class="mapboxgl-canary" style="visibility: hidden;"></div><div class="mapboxgl-canvas-container mapboxgl-interactive mapboxgl-touch-drag-pan mapboxgl-touch-zoom-rotate"><canvas class="mapboxgl-canvas" tabindex="0" aria-label="Map" role="region" width="380" height="689" style="width: 276px; height: 500px;"></canvas><div aria-label="Map marker" class="mapboxgl-marker mapboxgl-marker-anchor-center" style="transform: translate(-50%, -50%) translate(-14px, 130px) rotateX(0deg) rotateZ(0deg);"><svg display="block" height="41px" width="27px" viewBox="0 0 27 41"><g fill-rule="nonzero"><g transform="translate(3.0, 29.0)" fill="#000000"><ellipse opacity="0.04" cx="10.5" cy="5.80029008" rx="10.5" ry="5.25002273"></ellipse><ellipse opacity="0.04" cx="10.5" cy="5.80029008" rx="10.5" ry="5.25002273"></ellipse><ellipse opacity="0.04" cx="10.5" cy="5.80029008" rx="9.5" ry="4.77275007"></ellipse><ellipse opacity="0.04" cx="10.5" cy="5.80029008" rx="8.5" ry="4.29549936"></ellipse><ellipse opacity="0.04" cx="10.5" cy="5.80029008" rx="7.5" ry="3.81822308"></ellipse><ellipse opacity="0.04" cx="10.5" cy="5.80029008" rx="6.5" ry="3.34094679"></ellipse><ellipse opacity="0.04" cx="10.5" cy="5.80029008" rx="5.5" ry="2.86367051"></ellipse><ellipse opacity="0.04" cx="10.5" cy="5.80029008" rx="4.5" ry="2.38636864"></ellipse></g><g fill="#3FB1CE"><path d="M27,13.5 C27,19.074644 20.250001,27.000002 14.75,34.500002 C14.016665,35.500004 12.983335,35.500004 12.25,34.500002 C6.7499993,27.000002 0,19.222562 0,13.5 C0,6.0441559 6.0441559,0 13.5,0 C20.955844,0 27,6.0441559 27,13.5 Z"></path></g><g opacity="0.25" fill="#000000"><path d="M13.5,0 C6.0441559,0 0,6.0441559 0,13.5 C0,19.222562 6.7499993,27 12.25,34.5 C13,35.522727 14.016664,35.500004 14.75,34.5 C20.250001,27 27,19.074644 27,13.5 C27,6.0441559 20.955844,0 13.5,0 Z M13.5,1 C20.415404,1 26,6.584596 26,13.5 C26,15.898657 24.495584,19.181431 22.220703,22.738281 C19.945823,26.295132 16.705119,30.142167 13.943359,33.908203 C13.743445,34.180814 13.612715,34.322738 13.5,34.441406 C13.387285,34.322738 13.256555,34.180814 13.056641,33.908203 C10.284481,30.127985 7.4148684,26.314159 5.015625,22.773438 C2.6163816,19.232715 1,15.953538 1,13.5 C1,6.584596 6.584596,1 13.5,1 Z"></path></g><g transform="translate(6.0, 7.0)" fill="#FFFFFF"></g><g transform="translate(8.0, 8.0)"><circle fill="#000000" opacity="0.25" cx="5.5" cy="5.5" r="5.4999962"></circle><circle fill="#FFFFFF" cx="5.5" cy="5.5" r="5.4999962"></circle></g></g></svg></div></div><div class="mapboxgl-control-container"><div class="mapboxgl-ctrl-top-left"></div><div class="mapboxgl-ctrl-top-right"><div class="mapboxgl-ctrl-geocoder mapboxgl-ctrl"><svg class="mapboxgl-ctrl-geocoder--icon mapboxgl-ctrl-geocoder--icon-search" viewBox="0 0 18 18" xml:space="preserve" width="18" height="18"><path d="M7.4 2.5c-2.7 0-4.9 2.2-4.9 4.9s2.2 4.9 4.9 4.9c1 0 1.8-.2 2.5-.8l3.7 3.7c.2.2.4.3.8.3.7 0 1.1-.4 1.1-1.1 0-.3-.1-.5-.3-.8L11.4 10c.4-.8.8-1.6.8-2.5.1-2.8-2.1-5-4.8-5zm0 1.6c1.8 0 3.2 1.4 3.2 3.2s-1.4 3.2-3.2 3.2-3.3-1.3-3.3-3.1 1.4-3.3 3.3-3.3z"></path></svg><input type="text" class="mapboxgl-ctrl-geocoder--input" placeholder="Search" aria-label="Search"><div class="suggestions-wrapper"><ul class="suggestions" style="display: none;"></ul></div><div class="mapboxgl-ctrl-geocoder--pin-right"><button aria-label="Clear" class="mapboxgl-ctrl-geocoder--button"><svg class="mapboxgl-ctrl-geocoder--icon mapboxgl-ctrl-geocoder--icon-close" viewBox="0 0 18 18" xml:space="preserve" width="18" height="18"><path d="M3.8 2.5c-.6 0-1.3.7-1.3 1.3 0 .3.2.7.5.8L7.2 9 3 13.2c-.3.3-.5.7-.5 1 0 .6.7 1.3 1.3 1.3.3 0 .7-.2 1-.5L9 10.8l4.2 4.2c.2.3.7.3 1 .3.6 0 1.3-.7 1.3-1.3 0-.3-.2-.7-.3-1l-4.4-4L15 4.6c.3-.2.5-.5.5-.8 0-.7-.7-1.3-1.3-1.3-.3 0-.7.2-1 .3L9 7.1 4.8 2.8c-.3-.1-.7-.3-1-.3z"></path></svg></button><svg class="mapboxgl-ctrl-geocoder--icon mapboxgl-ctrl-geocoder--icon-loading" viewBox="0 0 18 18" xml:space="preserve" width="18" height="18"><path fill="#333" d="M4.4 4.4l.8.8c2.1-2.1 5.5-2.1 7.6 0l.8-.8c-2.5-2.5-6.7-2.5-9.2 0z"></path><path opacity=".1" d="M12.8 12.9c-2.1 2.1-5.5 2.1-7.6 0-2.1-2.1-2.1-5.5 0-7.7l-.8-.8c-2.5 2.5-2.5 6.7 0 9.2s6.6 2.5 9.2 0 2.5-6.6 0-9.2l-.8.8c2.2 2.1 2.2 5.6 0 7.7z"></path></svg></div></div></div><div class="mapboxgl-ctrl-bottom-left"><div class="mapboxgl-ctrl" style="display: block;"><a class="mapboxgl-ctrl-logo" target="_blank" rel="noopener nofollow" href="https://www.mapbox.com/" aria-label="Mapbox logo"></a></div></div><div class="mapboxgl-ctrl-bottom-right"><div class="mapboxgl-ctrl mapboxgl-ctrl-attrib mapboxgl-compact"><button class="mapboxgl-ctrl-attrib-button" type="button" title="Toggle attribution" aria-label="Toggle attribution"></button><div class="mapboxgl-ctrl-attrib-inner" role="list"><a href="https://www.mapbox.com/about/maps/" target="_blank" title="Mapbox" aria-label="Mapbox" role="listitem">© Mapbox</a> <a href="https://www.openstreetmap.org/about/" target="_blank" title="OpenStreetMap" aria-label="OpenStreetMap" role="listitem">© OpenStreetMap</a> <a class="mapbox-improve-map" href="https://apps.mapbox.com/feedback/?owner=mapbox&amp;id=streets-v11&amp;access_token=pk.eyJ1IjoidGl0YXNueGx0IiwiYSI6ImNqZWs3ZHliejBjOWMzM284aG1nbG1yN3IifQ._nFPiSI4HSaZriIEDwRa8g" target="_blank" title="Map feedback" aria-label="Map feedback" role="listitem" rel="noopener nofollow">Improve this map</a></div></div></div></div></div>

    <button class="greenbtn">Save</button>
    </form>
     </div>

<script>
  const locationElement = document.getElementById('location');
  console.log(locationElement.value.split(' '));
  mapboxgl.accessToken = 'pk.eyJ1IjoidGl0YXNueGx0IiwiYSI6ImNqZWs3ZHliejBjOWMzM284aG1nbG1yN3IifQ._nFPiSI4HSaZriIEDwRa8g';
  var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v11',
    doubleClickZoom: false,
    center: locationElement.value.split(' '),
    zoom: 7
  });

  // Add the control to the map.
  map.addControl(
    new MapboxGeocoder({
      accessToken: mapboxgl.accessToken,
      mapboxgl: mapboxgl
    })
  );

  let marker = new mapboxgl.Marker()
    .setLngLat(locationElement.value.split(' '))
    .addTo(map);

  map.on('dblclick', (e) => {
    marker.setLngLat(e.lngLat);
    locationElement.value = `${e.lngLat.lng} ${e.lngLat.lat}`;
  })
</script>
@endsection
