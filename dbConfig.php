<?php
// Configuração de banco de dados
$dbHost     = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbName     = "codexworld";

// Cria conexão de banco de dados
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verifique a conexão
if ($db->connect_error) {
    die("Conexão falhou: " . $db->connect_error);
}