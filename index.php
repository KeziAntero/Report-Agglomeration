<!DOCTYPE html>
<html lang="pt_BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet"/>
    <link rel="icon" href="./public/images/favicon.png" />
    <link rel="stylesheet" href="./public/css/main.css" />
    <link rel="stylesheet" href="./public/css/animations.css" />
    <link rel="stylesheet" href="./public/css/page-consulta.css" />

     <!-- Load Leaflet MarkerCluster and Esri Leaflet Cluster from CDN -->
     <link rel="stylesheet" type="text/css"
    href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css"
    integrity="sha512-BBToHPBStgMiw0lD4AtkRIZmdndhB6aQbXpX7omcrXeG2PauGBl2lzq2xUZTxaLxYz5IDHlmneCZ1IJ+P3kYtQ=="
    crossorigin="">

    <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css"
    integrity="sha512-RLEjtaFGdC4iQMJDbMzim/dOvAu+8Qp9sw7QE4wIMYcg2goVoivzwgSZq9CsIxp4xKAZPKh5J2f2lOko2Ze6FQ=="
    crossorigin="">
      
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
       
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
 
 
  </head>
  <body>
    
    <div id="page-consulta">
      <aside class="animate-right">
        <header>
          <img src="./public/images/logob.png" alt="logo" width="180" height="70"/>
        </header>
       
        <footer>
          <p>
            <span id="city"></span>cidade<br />
          </p>
        </footer>
      </aside>

          <div id="mapid" class="animate-appear"></div>
      
          <div class="perfil">
            <button type="button" name="drop"><img id="avatar" src="./public/images/user.jpg"></button>
            <div class="drop-content">
             <a href="#">Olá <span id="user-name">Visitante</span>!</a>
              <a href="#"><i class="fas fa-sign-out-alt"></i>  Sair</a>
            </div>
          </div>

      </div>

     
      <a href="indices.php" class="indices" title="Indices aglomeração">
        <img src="./public/images/graph.svg" alt="Indices aglomeração" style="width: 50px;"/>
      </a>

      <a href="add-aglomeracao.php" class="add-aglomeracao" title="Adicione uma aglomeração">
        <img src="./public/images/plus.svg" alt="Adicione uma aglomeração" />
      </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="./public/scripts/map-index.js"></script>
    <script src="./public/scripts/login.js"></script>
  </body>
</html>
