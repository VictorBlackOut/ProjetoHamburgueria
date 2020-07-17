<?php
        $host = "localhost";
        $usuario = "root";
        $senha = "";
        $bd = "bd_portuga";
        
        $mysqli = new mysqli($host, $usuario, $senha, $bd);
        
        if($mysqli->connect_errno)
            echo "Erro ao conectar: (".$mysqli->connect_errno.")".$mysqli->connect_error;
        
        ?>