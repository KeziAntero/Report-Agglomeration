
function onSignIn(response) {
      
      var perfil = response.getBasicProfile();

      var userID = perfil.getId();
      
      var userName = perfil.getName();

      var userPicture = perfil.getImageUrl();

      document.getElementById('avartar').src = userPicture;
      document.getElementById('user-name').innerText = userName;
      window.location.assign = "index.html";

      // Recebendo o TOKEN para as requisições futuras da API:
      var LoR = response.getAuthResponse().id_token;
      console.log("~ le Tolkien: " + LoR);

      
  };