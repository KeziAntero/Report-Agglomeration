var urlPost = "http://localhost:7000/";

$("#confirmar").on("click", function (evt) {
    evt.preventDefault();
    var form = document.querySelector("form");
    var reporte = obterReport(form);
    console.log(reporte);
    enviarParaWebService(reporte);
});

function obterReport(form){
    var lat = form.lat.value;
    var lng = form.lng.value;
    var localizacao = lat + "," + lng;
    report = {
        "status": "success",
        "nomeLocal": form.nome.value,
        "quantidade": form.quantidade.value,
        "mascara": form.opcoes.value,
        "distanciamento": form.detachment.value,
        "obs": form.note.value,
        "dataHora": form.hours.value,
        "localizacao": localizacao
    }

    return report;

}

function enviarParaWebService(report){
    $.ajax({
        method: "POST",
        url: urlPost,
        data: JSON.stringify(report),
      })
        .done(function( msg ) {
          alert( "Reporte Salvo: " + msg );
        });
}
