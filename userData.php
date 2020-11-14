<?php
// Carrega o arquivo de configuração do banco de dados
require_once 'dbConfig.php';

// Obtem e decodifica os dados POST
$userData = json_decode($_POST['userData']);

if(!empty($userData)){
    // informações do perfil do usuário
    $oauth_provider = $_POST['oauth_provider'];
    $oauth_uid  = !empty($userData->id)?$userData->id:'';
    $first_name = !empty($userData->given_name)?$userData->given_name:'';
    $last_name  = !empty($userData->family_name)?$userData->family_name:'';
    $email      = !empty($userData->email)?$userData->email:'';
    $gender     = !empty($userData->gender)?$userData->gender:'';
    $locale     = !empty($userData->locale)?$userData->locale:'';
    $picture    = !empty($userData->picture)?$userData->picture:'';
    $link       = !empty($userData->link)?$userData->link:'';
    
    // Verifica se os dados do usuário já existem no banco de dados
    $query = "SELECT * FROM users WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'";
    $result = $db->query($query);
    
    if($result->num_rows > 0){ 
        // Atualiza os dados do usuário se já existirem
        $query = "UPDATE users SET first_name = '".$first_name."', last_name = '".$last_name."', email = '".$email."', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', link = '".$link."', modified = NOW() WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'";
        $update = $db->query($query);
    }else{
        // Insire os dados do usuário
        $query = "INSERT INTO users VALUES (NULL, '".$oauth_provider."', '".$oauth_uid."', '".$first_name."', '".$last_name."', '".$email."', '".$gender."', '".$locale."', '".$picture."', '".$link."', NOW(), NOW())";
        $insert = $db->query($query);
    }
    
    return true;
}
?>