<?php

$usuario = 'root';
$senha = '';
$database = "login";
$host = "localhost";

$mysqli = new mysqli ($host, $usuario, $senha, $database);
if ($mysqli->error) {
    die("problema na conexão com o banco" .$mysqli->error);
}
?>