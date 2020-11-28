
var user;

function onSignIn(response) {
      
      var perfil = response.getBasicProfile();

      user = {
            "id" : perfil.getId(),
            "nome" : perfil.getName(),
            "imagem" : perfil.getImageUrl()
      }  

      $.get("index.php",user);

      // Recebendo o TOKEN para as requisições futuras da API:
      var LoR = response.getAuthResponse().id_token;
      console.log("~ le Tolkien: " + LoR);

      window.location.href = "index.php";
  };

