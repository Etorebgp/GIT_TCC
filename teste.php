<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$db = "pdadb";

$mysqli = mysqli_connect($host,$usuario,$senha,$db);
if($mysqli->connect_error){
  echo "falha";
}else{
  echo "success";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

</body>

</html>
