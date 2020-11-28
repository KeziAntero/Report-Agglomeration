<?php

    function incluirClasse($nomeClasse)
    {
        if(file_exists($nomeClasse.".php") === true)
        {
            require_once($nomeClasse.".php");
        }
    }

    sql_autoload_register("incluirClasse");
    sql_autoload_register(function($nomeClasse)
    {
        if(file_exists("model".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){
            
            require_once("model".DIRECTORY_SEPARATOR.$nomeClasse.".php");

        }else if(file_exists("controller".DIRECTORY_SEPARATOR.$nomeClasse.".php") === true){

            require_once("controller".DIRECTORY_SEPARATOR.$nomeClasse.".php");
            
        }
    });
?>    