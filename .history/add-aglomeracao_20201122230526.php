<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Adicionar aglomeração | RA</title>
    <link rel="icon" href="public/images/favicon.png" />
    <link rel="stylesheet" href="">
    <link
      rel="stylesheet"
      href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
      integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
      crossorigin=""
    />

    <script
      src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
      integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
      crossorigin=""
    ></script>

   

    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="stylesheet" href="./public/css/animations.css" />
    <link rel="stylesheet" href="./public/css/sidebar.css" />
    <link rel="stylesheet" href="./public/css/map.css" />
    <link rel="stylesheet" href="./public/css/form.css" />
    <link rel="stylesheet" href="./public/css/buttons.css" />
    <link rel="stylesheet" href="./public/css/add-aglomeracao.css" />

    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
    <div id="add-aglomeracao">
      <aside class="animate-right sidebar">
        <img src="./public/images/logonav.png" alt="logo" width="70" height="70"/>

        <footer>
          <button onclick="history.back()">
            <img src="./public/images/arrow-back.svg" alt="Voltar" />
          </button>
        </footer>
      </aside>

      <main class="animate-appear with-sidebar">
        <form action="http://localhost:7000">
          <fieldset>
            <legend>Adicionar aglomeração</legend>

            <div class="map-container">
              <div id="mapid"></div>
              <input type="hidden" name="lat" />
              <input type="hidden" name="lng" />

              <footer>
                <a href="#" id="select-point">
                  Clique no mapa para adicionar a localização
                </a>
              </footer>
            </div>

            <div class="input-block">
              <label for="name">Nome do local</label>
              <input id="name" name="name" placeholder="Ex: Lotérica da sorte" required />
            </div>

            <div class="input-block">
              <label for="number">Número médio de pessoas</label>
              <input id="number" type="number" required />
            </div>
          
            <div class="select-block">
              <label for="number">Pessoas usando máscara</label>
              <select id="opções" required>
               <option selected disabled>Selecione...</option>
                <option value="0" >Todas</option>
                <option value="1">Algumas</option>
                <option value="2">Nenhuma</option>
               </select>
            </div>
           
            <div class="input-block">
              <label for="detachment">Distanciamento sendo respeitado?</label>
              <input
                type="hidden"
                id="detachment"
                name="detachment"
                value="1"
                required
              />

              <div class="button-select">
                <button data-value="1" onclick="toggleSelect(event)" type="button" class="active">Sim</button>
                <button data-value="0" onclick="toggleSelect(event)" type="button">Não</button>
              </div>

                           
            <div class="input-block">
              <label for="note">Observação<span>Máximo de 300 caracteres</span></label>
              <textarea id="note" name="note" required></textarea>
            </div>

            <div class="input-block">
              <label for="hours">Data/Horário</label>
              <input type = DateTime-Local id="hours" name="hours" required />
            </div>

           
              <button type="submit" class="primary-button">Confirmar</button>
            </div>
          </fieldset>

        </form>
      </main>
    </div>

    <script src="./public/scripts/add-aglomeracao.js"></script>
  </body>
</html>
