

var map = L.map('mapid').setView([-9.5510128, -49.62864725], 4);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://osm.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

var searchControl = L.esri.Geocoding.geosearch().addTo(map);

var results = L.layerGroup().addTo(map);

searchControl.on('results', function (data) {
  results.clearLayers();
  for (var i = data.results.length - 1; i >= 0; i--) {
    results.addLayer(L.marker(data.results[i].latlng));
  }
});
var popup = L.popup();

function onMapClick(e) {
   popup
        .setLatLng(e.latlng)
        .setContent("Você clicou no mapa" )
         .openOn(map);
}

map.on('click', onMapClick);




  //L.esri.Cluster.featureLayer({
  //  url: 'https://sampleserver6.arcgisonline.com/arcgis/rest/services/Earthquakes_Since1970/MapServer/0'
  //}).addTo(map);

