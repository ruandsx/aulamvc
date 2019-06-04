<?php 
require 'functions.php';

/*
class Tarefa{

	protected $descricao;

	protected $completa = false;


	public function __construct($descricao){

		$this->descricao = $descricao;

	}

	public function completar(){
		$this->completa = true;
	}

	public function completa(){

		return $this->completa;

	}

	public function descricao(){

		return $this->descricao;

	}

}

*/

/*
tarefas = [ 
	new Tarefa('Ir ao mercado'),
	new Tarefa('Comprar milho'),
	new Tarefa('Estudar modelagem')
];


$tarefas[2]->completar();

*/


/*
$query = $pdo->prepare('SELECT * FROM todos');
$query->execute();
$tarefas = $query->fetchAll(PDO::FETCH_CLASS, 'Tarefa');
*/
require 'views/index.view.php';