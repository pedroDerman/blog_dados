<?php

//CRUD, cadastro de users

//Banco de dados local
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname="dados_blog";

//Banco de dados externo 
$servername = "qao3ibsa7hhgecbv.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username   = "mclf4x8bwai9xwr4";
$password   = "xub4v47d5cts31ba";
$dbname     = "or1h0wik29d2piyu";


try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8" ,$username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO users (aluno, disciplina, nota1,nota2)
  VALUES ('John', 'Doe', 10, 10)";
  // use exec() because no results are returned
  $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>