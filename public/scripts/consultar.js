const map = L.map('mapid').setView([-6.47926,-35.4348], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',)
.addTo(map);

const icon = L.icon({
    iconUrl: "./public/images/location.svg",
    iconSize: [58, 48],
    iconAnchor: [29,68],
    popupAnchor: [170, 2]
})

const popup = L.popup({
    closeButton: false,
    className: "map-popup",
    minWidth: 240,
    minHeight: 240
}).setContent('Av. Assis Chateaubriand Data do registro: 20/10/2020 Hora do registro: 02:59 Nº estimado de pessoas: 20 Pessoas usando máscara: Nenhuma Distanciamento sendo respeitado: Não Observações: som alto <a href="indices.html?id=1" class="add-aglomeracao"> <img src="./public/images/arrow-white.svg"> </a>')

L
.marker([-6.47926,-35.4348], { icon })
.addTo(map)
.bindPopup(popup)
