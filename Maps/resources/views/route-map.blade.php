<!DOCTYPE html>
<html>
<head>
  <title>Route Map</title>
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
  <style>
    #map { height: 100vh; width: 100%; }
  </style>
</head>
<body>

<div id="map"></div>

<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.min.js"></script>

<script>
  const originStr = "{{ $origin }}";
  const destinationStr = "{{ $destination }}";

  const origin = originStr.split(',');
  const destination = destinationStr.split(',');

  const map = L.map('map').setView([origin[0], origin[1]], 7);

  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
  }).addTo(map);

  L.Routing.control({
    waypoints: [
      L.latLng(origin[0], origin[1]),
      L.latLng(destination[0], destination[1])
    ],
    routeWhileDragging: false
  }).addTo(map);
</script>

</body>
</html>
