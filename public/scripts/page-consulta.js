if ('geolocation' in navigator) {
    console.log('geolocation available');
    navigator.geolocation.getCurrentPosition(position => {
      lat = position.coords.latitude;
      lon = position.coords.longitude;
      console.log(lat, lon);
      document.getElementById('latitude').textContent = lat;
      document.getElementById('longitude').textContent = lon;

      const mapid = L.map('mapid').setView([lat, lon], 15);
      const attribution =
        '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
      const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
      const tiles = L.tileLayer(tileUrl, { attribution });
      tiles.addTo(mapid);
      
      const icon = L.icon({
        iconUrl: "./public/images/map-marker.svg",
        iconSize: [58, 68],
        iconAnchor: [29,68],
        popupAnchor: [170, 2]
    })
    
    const popup = L.popup({
        closeButton: false,
        className: "map-popup",
        minWidth: 240,
        minHeight: 240
    }).setContent('Lar das meninas <a href="orphanage.html?id=1" class="choose-orphanage"> <img src="./public/images/arrow-white.svg"> </a>')
     
    const marker = L.marker([lat, lon]).addTo(mapid).bindPopup(popup);
    });
  } else {
    console.log('geolocation not available');
  }





