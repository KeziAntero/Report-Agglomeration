var urlPost = "http://localhost:7000/index.php/";

$("#confirmar").on("click", function (evt) {
    evt.preventDefault();
    var form = document.querySelector("form");
    var reporte = obterReport(form);
    console.log(reporte);
    enviarParaWebService(reporte);
});

function obterReport(form){
    
    report = {
        "status": "200",
        "nomeLocal": form.nome.value,
        "quantidade": form.quantidade.value,
        "mascara": form.opcoes.value,
        "distanciamento": form.detachment.value,
        "obs": form.note.value,
        "dataHora": form.hours.value,
        "latitude": form.lat.value,
        "longitude": form.lng.value
    }

    return report;

}

function enviarParaWebService(report){
    $.ajax({
        contentType: 'application/json',
        cache: false,
        method: 'POST',
        dataType: 'json',
        data: JSON.stringify(report),
      })
        .done(function( msg ) {
          alert( "Reporte Salvo: " + msg );
        });
}
