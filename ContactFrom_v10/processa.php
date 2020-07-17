<?php

include_once("conexao.php");

$nome = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
$sobrenome = filter_input(INPUT_POST, 'sobrename', FILTER_SANITIZE_STRING);
$dia = filter_input(INPUT_POST, 'dia', FILTER_SANITIZE_STRING);
$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_STRING);
$ano = filter_input(INPUT_POST, 'ano', FILTER_SANITIZE_STRING);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING);

$result_reserva = "INSERT INTO reserva (nome, sobrenome, dia, mes, ano) VALUES ('$nome', '$sobrenome', '$dia', 'mes', 'ano', 'telefone')";
$resultado_reserva = mysql_query($conn, $result_reserva);

?>