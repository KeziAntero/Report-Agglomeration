
navigator.geolocation.getCurrentPosition(position => {
  lat = position.coords.latitude;
  lng = position.coords.longitude;

const map = L.map('mapid').setView([lat,lng], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',)
.addTo(map);

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