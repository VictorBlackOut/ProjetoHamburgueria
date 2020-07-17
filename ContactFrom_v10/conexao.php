<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "bd_portuga";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if ($mysqli->connect_errno)
	echo "Falha na conexao: (".$mysqli->connect_errno.")"$mysqli->connect_error;
$conn = mysqli_connect($host, $usuario, $senha, $bd);
?>