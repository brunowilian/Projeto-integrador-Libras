<?php
$usuario = 'root';
$senhabd = 'root';
$database = 'login';
$host = 'localhost:3307';

$mysqli = new mysqli($host, $usuario, $senhabd, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>
