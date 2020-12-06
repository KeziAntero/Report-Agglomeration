//create map
if ('geolocation' in navigator) {
    navigator.geolocation.getCurrentPosition(position => {
        lat = position.coords.latitude;
        lng = position.coords.longitude;

const map = L.map('mapid').setView([lat,lng], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png',)
.addTo(map);


const icon = L.icon({
    iconUrl: "./public/images/mark-red.png",
    iconSize: [38, 48],
    iconAnchor: [29,68],
})

let marker;

map.on('click', (event) => {
    const lat = event.latlng.lat
    const lng = event.latlng.lng

    console.log("latitude => "+lat);
    console.log("longitude => "+lng);

    document.querySelector('[name=lat]').value = lat
    document.querySelector('[name=lng]').value = lng

    marker && map.removeLayer(marker)

    marker = L.marker([lat, lng], { icon })
    .addTo(map)
})


function toggleSelect(event) {
    document.querySelectorAll('.button-select button')
    .forEach((button) => button.classList.remove('active'))


    const button = event.currentTarget
    button.classList.add('active')

    const input = document.querySelector('[name="open_on_weekends"]')
    input.value = button.dataset.value
}
    });
}else {
    document.getElementById('geolocation not available');
  }
  function toggleSelect(event) {
    document.querySelectorAll('.button-select button')
    .forEach((button) => button.classList.remove('active'))


    const button = event.currentTarget
    button.classList.add('active')

    const input = document.querySelector('[name="detachment"]')
    
    input.value = button.dataset.value
}
