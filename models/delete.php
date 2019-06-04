<?php 
require '../database/connection.php';
require '../functions.php';

$id = $_GET['id'];

$sql_insert = "DELETE FROM  todos  WHERE id = $id";

try{
	$pdo->exec($sql_insert);
}catch(PDOException $e){
	die($e->getMessage());
}

header("location: ../index.php");