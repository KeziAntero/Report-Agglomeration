<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Indices de aglomeração | RA</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" href="./public/images/favicon.png" />

    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="stylesheet" href="./public/css/animations.css" />
    <link rel="stylesheet" href="./public/css/sidebar.css" />
    <link rel="stylesheet" href="./public/css/buttons.css" />
    <link rel="stylesheet" href="./public/css/indices.css" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css" integrity="sha512-/zs32ZEJh+/EO2N1b0PEdoA10JkdC3zJ8L5FTiQu82LR9S/rOQNfQN7U59U9BC12swNeRAz3HSzIL2vpp4fv3w==" crossorigin="anonymous" />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="indices">
      <aside class="animate-right sidebar">

        <img src="./public/images/logonav.png" width="80px" height="80px" alt="logo">

        <footer>
          <button onclick="history.back()">
            <img src="./public/images/arrow-back.svg" alt="Voltar">
          </button>
        </footer>

      </aside>

      <main class="animate-appear with-sidebar">
        <div class="indices-details">
          <div class="indices-details-content">
            <h2>As 10 aglomerações com maior número de pessoas</h2><br>

            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">*</th>
                  <th scope="col">Local do registro da aglomeração</th>
                  <th scope="col">Nº de pessoas</th>
                  <th scope="col">Distanciamento?</th>
                  <th scope="col">Usando Máscara?</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Rua da agonia</td>
                  <td>50</td>
                  <td>Não</td>
                  <td>Não</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Loterica da esperança</td>
                  <td>30</td>
                  <td>Sim</td>
                  <td>Não</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Supermercado</td>
                  <td>20</td>
                  <td>Não</td>
                  <td>Sim</td>
                </tr>
              </tbody>
            </table>
            
            <hr>

            <h2>Linha do tempo com aglomerações cadastradas por dia</h2>
            
            <canvas id="line-chart" width="800" height="450"></canvas>

            <hr>
            <h2>Pessoas usando máscaras nas aglomerações</h2>
            
            <canvas id="pie-chart" width="800" height="450"></canvas>
          </div>
        </div>
      </main>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="./public/scripts/indices.js"></script>
  </body>
</html>
