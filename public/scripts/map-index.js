if ('geolocation' in navigator) {
  navigator.geolocation.getCurrentPosition(position => {
    lat = position.coords.latitude;
    lng = position.coords.longitude;

    
var map = L.map('mapid').setView([lat,  lng], 15);

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

L.marker([lat,lng]).addTo(map)
    .bindPopup('Você está aqui.')
    .openPopup();


const icon = L.icon({
  iconUrl: "./public/images/mark-red.png",
  iconSize: [38, 48],
  iconAnchor: [0,0],
  popupAnchor: [20, 3]
})

const popup = L.popup({
  closeButton: false,
  className: "map-popup",
  minWidth: 140,
  minHeight: 840
}).setContent('Lorem ipsum dolor sit amet')

L
.marker([lat,lng], { icon })
.addTo(map)
.bindPopup(popup)
});

 
} else {
  document.getElementById('geolocation not available');
}


  //L.esri.Cluster.featureLayer({
  //  url: 'https://sampleserver6.arcgisonline.com/arcgis/rest/services/Earthquakes_Since1970/MapServer/0'
  //}).addTo(map);

