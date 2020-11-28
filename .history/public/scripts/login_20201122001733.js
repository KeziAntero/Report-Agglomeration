
var user;

function onSignIn(response) {
      
      var perfil = response.getBasicProfile();

      user = {
            "id" : perfil.getId(),
            "nome" : perfil.getName(),
            "imagem" : perfil.getImageUrl()
      }  

      console.log(user);

      // Recebendo o TOKEN para as requisições futuras da API:
      var LoR = response.getAuthResponse().id_token;
      console.log("~ le Tolkien: " + LoR);

      redirecionar(user);
      
  };

function redirecionar(data){
    $.get("index.php",data);
    window.location.assign = "index.php";
}