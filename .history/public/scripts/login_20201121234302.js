
var user;

function onSignIn(response) {
      
      var perfil = response.getBasicProfile();

      user = {
            "id" : perfil.getId(),
            "nome" : perfil.getName(),
            "imagem" : perfil.getImageUrl()
      }    

      document.getElementById('#avartar').src = userPicture;
      document.getElementById('user-name').innerText = userName;
      window.location.assign = "index.html";

      // Recebendo o TOKEN para as requisições futuras da API:
      var LoR = response.getAuthResponse().id_token;
      console.log("~ le Tolkien: " + LoR);

      
  };