var urlTopWS = "http://ws-reporte-consulta.brazilsouth.cloudapp.azure.com:2500/top";
window.onload = getTopReportes;
var autoTopFunction = setInterval(getTopReportes,5000);

var xhr = new XMLHttpRequest();

xhr.addEventListener("load", function () {
    var tbody = document.querySelector(".table");
    var report = JSON.parse(xhr.responseText);
    for (i = 0; i < 5; i++) {
        var tr = criarTr(report[i],i+1);
        tbody.appendChild(tr);
    }
});

function getTopReportes() {
    var tbd = document.querySelector(".table");
    limparTable(tbd);
    xhr.open("GET", urlTopWS);
    xhr.send();
}

function criarTr(dado,n){
    var tr = document.createElement("tr");
    tr.appendChild(criarTd(n,"classificacao"))
    tr.appendChild(criarTd(dado.nome,"nome"));
    tr.appendChild(criarTd(dado.quantidade,"quantidade"));

    return tr;
}

function criarTd(conteudo, classe){
    var td = document.createElement("td");
    td.textContent = conteudo;
    td.classList.add(classe);

    return td;
}

function limparTable(old_tbd) {
    var table = document.querySelector("table");
    var n_tbd = document.createElement("tbody");
    n_tbd.classList.add("table");
    table.removeChild(old_tbd);
    table.appendChild(n_tbd);
}

