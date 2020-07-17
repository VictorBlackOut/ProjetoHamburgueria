<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "bd_portuga";
        
        $mysqli = new mysqli($host, $usuario, $senha, $bd);
        
        if($mysqli->connect_errno)
            echo "Erro ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_error;
        
        ?>
    </body>
</html>
