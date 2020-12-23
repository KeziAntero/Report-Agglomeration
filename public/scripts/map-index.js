var urlAllWS = "http://7.156.46.82/webservice/reporte_consulta_aglomeracao/?pesquisa=all";


var reportes;
var map;

if ('geolocation' in navigator) {
  navigator.geolocation.getCurrentPosition(position => {
    lat = position.coords.latitude;
    lng = position.coords.longitude;

    
map = L.map('mapid').setView([lat,  lng], 15);

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

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
  iconUrl: "./public/images/mark-yellow.png",
  iconSize: [38, 48],
  iconAnchor: [0,0],
  popupAnchor: [20, 3]
})

})


 
} else {
  document.getElementById('geolocation not available');
}

var autoFunction = setInterval(getAllReportes,1000);

function getAllReportes(){
  $.get(urlAllWS,function(result) {
    
    result.forEach(item => {
      var dist = "NÃO";
      if(item.report_distanciamento === "1"){
        dist = "SIM";
      }
      reportes = `
                  <table>
                  <tr>
                    <th>Local:</th>
                    <td style="color: #000;">${item.report_nome_local}</td>
                  </tr>
                  <tr> 
                    <th>Qtd de Pessoas:</th>
                    <td style="color: #000;">${item.report_quantidade_pessoas}</td>
                  </tr>
                  <tr>
                    <th>Máscara:</th>
                    <td style="color: #000;">${item.report_mascara}</td>
                  <tr>
                    <th>Distanciamento:</th>
                    <td style="color: #000;">${dist}</td>
                  </tr>  
                  <tr>
                    <th>Data e Hora:</th>
                    <td style="color: #000;">${item.report_data_hora}</td>
                  </tr>
                  <tr>  
                    <th>Obs:</th>
                    <td style="color: #000;">${item.report_observacoes}</td>
                  </tr>
                </table>
                `;
      var icon;
      if (item.report_quantidade_pessoas >= 3 && item.report_quantidade_pessoas <= 10) {
        icon = L.icon({
          iconUrl: "./public/images/mark-green.png",
          iconSize: [30, 40],
          iconAnchor: [0,0],
          popupAnchor: [20, 3]
        })
      } else if (item.report_quantidade_pessoas >= 11 && item.report_quantidade_pessoas <= 50) {
        icon = L.icon({
          iconUrl: "./public/images/mark-yellow.png",
          iconSize: [30, 40],
          iconAnchor: [0,0],
          popupAnchor: [20, 3]
        })
      } else if (item.report_quantidade_pessoas >= 51) {
        icon = L.icon({
          iconUrl: "./public/images/mark-red.png",
          iconSize: [30, 40],
          iconAnchor: [0,0],
          popupAnchor: [20, 3]
        })
      }
      
      const popup = L.popup({
      closeButton: false,
      className: "map-popup",
      minWidth: 150,
      minHeight: 840
      }).setContent(reportes)
      L
      .marker([item.report_latitude,item.report_longitude], { icon })
      .addTo(map)
      .bindPopup(popup)
    });
  });
}


  //L.esri.Cluster.featureLayer({
  //  url: 'https://sampleserver6.arcgisonline.com/arcgis/rest/services/Earthquakes_Since1970/MapServer/0'
  //}).addTo(map);

