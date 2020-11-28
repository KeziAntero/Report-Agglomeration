<?php

    spl_autoload_register(function($nomeClasse)
    {
        if(file_exists($nomeClasse.".php")){

            require_once($nomeClasse.".php");

        }else if(file_exists("model".DIRECTORY_SEPARATOR.$nomeClasse.".php")){
            
            require_once("../model".DIRECTORY_SEPARATOR.$nomeClasse.".php");

        }else if(file_exists("controller".DIRECTORY_SEPARATOR.$nomeClasse.".php")){

            require_once("../controller".DIRECTORY_SEPARATOR.$nomeClasse.".php");
            
        }
    });
?>    