<?php
    ob_start();
    session_start();

    require __DIR__."/../vendor/autoload.php";

    if(empty($_SESSION['userLogin'])) {
        /**
         * AUTH GOOGLE
         */

         $google = new League\OAuth2\Client\Provider\Google(GOOGLE);
         $authUrl = $google->getAuthorizationUrl();

         $error = filter_input(INPUT_GET, "erro", FILTER_SANITIZE_STRING);
         $code = filter_input(INPUT_GET, "code", FILTER_SANITIZE_STRING);

         

        if($error) {
            echo "Precisa se autenticar!";
        }

        if($code) {
            $token = $google->getAccessToken("authorization_code", [
                "code" => $code
            ]);

        $_SESSION['userLogin'] = serialize($google->getResourceOwner($token));

        header("location: painel.php");

        }

    } else {
        $user = unserialize($_SESSION['userLogin']);   
       
        $off = filter_input(INPUT_GET, "off", FILTER_VALIDATE_BOOLEAN);

        if($off) {
            unset($_SESSION['userLogin']);

            header("location: index.php");
        }
    }

    ob_end_flush();