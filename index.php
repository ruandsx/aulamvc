<?php 
require 'functions.php';
require 'database/connection.php';
require 'controllers/Tarefa.php';


$query = $pdo->prepare('SELECT * FROM todos');

$query->execute();

$tarefas = $query->fetchAll(PDO::FETCH_CLASS, 'Tarefa');

require 'views/index.view.php';