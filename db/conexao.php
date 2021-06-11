<?php

//Pagina de coneção com o banco de dados.

/*Banco de dados local
$servername = "localhost";
$username = "root";
$password = "";
$dbname="dados_blog"; */ 

//Banco de dados externo
 
$servername = "qao3ibsa7hhgecbv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username   = "mclf4x8bwai9xwr4";
$password   = "xub4v47d5cts31ba	";
$dbname     = "or1h0wik29d2piyu";


try {
  $conn = new PDO("mysql:host=$servername;port=3306;dbname=$dbname;charset=utf8" ,$username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Conectado Feita Com Sucesso";
} catch(PDOException $e) {
  echo "Falha na Conexão: " . $e->getMessage();
}
?>