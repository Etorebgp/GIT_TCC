<?php

    $host = "localhost";
    $usuario = "root";
    $senha = "root";
    $db = "usuarios";

    
    $mysqli = new mysqli($host,$usuario, $senha, $db);
    
    if($mysqli->connect_errno)
        echo "Falha na conexão: (".$mysqli->connect_errno.")".$mysqli->connect_error;
    else{
	echo "Conexão realizada"; 
}
    
    ?>