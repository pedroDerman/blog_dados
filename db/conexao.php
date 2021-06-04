<?php

//Pagina de coneção com o banco de dados.

$servername = "localhost";
$username = "root";
$password = "";
$dbname="dados_blog";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8" ,$username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado Feita Com Sucesso";
} catch(PDOException $e) {
  echo "Falha na Conexão: " . $e->getMessage();
}
?>