<?php 
require '../database/connection.php';
require '../functions.php';
require '../controllers/Tarefa.php';

$id = $_GET['id'];

$query = $pdo->prepare("SELECT * from todos WHERE id=$id");
$query->execute();
$tarefas = $query->fetchAll(PDO::FETCH_CLASS, 'Tarefa');

if(isset($_POST['descricao'])):
	$descricao = $_POST['descricao'];

	if(isset($_POST['concluida'])) :
		$concluida = true;
	else:
		$concluida = false;
	endif;

	$sql_insert = "UPDATE todos SET descricao = '$descricao', concluida = '$concluida' WHERE id = $id";
	try{
		$pdo->exec($sql_insert);
	}catch(PDOException $e){
		die($e->getMessage());
	}
	header("location: ../index.php");
endif;