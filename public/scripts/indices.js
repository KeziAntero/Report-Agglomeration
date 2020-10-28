const options = {
    dragging: false,
    touchZoom: false,
    doubleClickZoom: false,
    scrollWheelZoom: false,
    zoomControl: false,
}

const map = L.map('mapid', options).setView([-6.47926,-35.4348], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',)
.addTo(map);

const icon = L.icon({
    iconUrl: "./public/images/location.svg",
    iconSize: [58, 68],
    iconAnchor: [29,68],
    popAnchor: [170, 2]
})

L
.marker([-6.47926,-35.4348], { icon })
.addTo(map)


