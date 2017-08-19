<?php



function conectar_banco(login,senha){
  $host = "localhost";
  $usuario = $_POST["login"];
  $senha = $_POST["password"];
  $db = "pdadb";

  $mysqli = mysqli_connect($host,$usuario,$senha,$db);
  if($mysqli->connect_error){
    echo "falha";
  }else{
    echo "success";
  }

}
?>
