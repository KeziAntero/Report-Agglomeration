var form = document.querySelector(form);

form.addEventListener('submit', function(evt){
    evt.preventDefault();
    var reporte = obterReport(form);
    enviarParaWebService(reporte);
});

function obterReport(form){

    report = {
        "status": "success",
        "nomeLocal": form.nome.value,
        "quantidade": form.quantidade.value,
        "mascara": form.opcoes.value,
        "distanciamento": form.detachment.value,
        "obs": form.note.value,
        "dataHora": form.hours.value
    }

    return report;

}

function enviarParaWebService(report){
    $.post("http://localhost:7000",JSON.stringify(report));
}
