var person = { userID: "", first_name: "", accessToken: "", picture: "", email: ""};

function logIn() {
    FB.login(function (response) {
        if (response.status == "connected") {
            person.userID = response.authResponse.userID;
            person.accessToken = response.authResponse.accessToken;

            FB.api('/me?fields=id,first_name,email,picture.type(large)', function (userData) {
                person.first_name = userData.first_name;
                person.email = userData.email;
                person.picture = userData.picture.data.url;

                $.ajax({
                   url: "login.php",
                   method: "POST",
                   data: person,
                   dataType: 'text',
                   success: function (serverResponse) {
                       console.log(person);
                       if (serverResponse == "success")
                           window.location = "index.php";
                   }
                });
            });
        }
    }, {scope: 'public_profile, email'})
}

window.fbAsyncInit = function() {
    FB.init({
        appId            : '1791804077640492',
        autoLogAppEvents : true,
        xfbml            : true,
        version          : 'v9.0'
    });
};

(function(d, s, id){
    var js, fjs = d.getElementsByTagfirst_name(s)[0];
    if (d.getElementById(id)) {return;}
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));