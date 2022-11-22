<?php
$hostname="localhost";
$bancodedados = "login";
$usuario = "root";
$senha = "123456";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if ($mysqli->connect_errno) {
    die("Falha ao Conectar ao banco de dados: " . $mysqli->errno);
}