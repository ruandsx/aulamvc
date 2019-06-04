<?php 
require '../database/connection.php';

$descricao = $_POST['descricao'];
isset($_POST['concluida']) ? $concluida = true : $concluida = false;



$sql_insert = "INSERT INTO todos(descricao, concluida) VALUES ('$descricao', '$concluida')";

try{
	$pdo->exec($sql_insert);
}catch(PDOException $e){
	die($e->getMessage());
}

header("location: ../index.php");