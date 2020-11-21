
new Chart(document.getElementById("line-chart"), {
    type: 'line',
    data: {
      labels: ["Jan","Fev","Mar","Abr","Mai","Jun","Jul","Ago","Set","Out","Nov","Dez"],
      datasets: [{ 
          data: [0,5,10,15,20,25,30,35,40,45,50,55],
          label: "Número de aglomerações cadastradas",
          borderColor: "#E62E00",
          fill: false
        }, 
      ]
      
    },
    
    options: {
      title: {
        display: false,
        text: 'Linha do tempo com as aglomerações cadastradas por dia'
      },
      scales: {
        xAxes: [{
        scaleLabel: {
            display: true,
            labelString: 'Dias'
        }
        }],
        yAxes: [{
        scaleLabel: {
            display: true,
            labelString: 'Nº de aglomerações cadastradas'
        }
        }]
    }
    }
  });



  new Chart(document.getElementById("pie-chart"), {
    type: 'pie',
    data: {
      labels: ["ALGUMAS", "NENHUMA",  "TODAS"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#e62e00","#7EEA0F"],
        data: [5,85,5]
      }]
    },
    options: {
      title: {
        display: true,
        text: ''
      }
    }
});