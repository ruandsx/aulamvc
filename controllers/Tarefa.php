<?php 

class Tarefa{

	public $id;

	public $descricao;

	public $concluida;


	public function create(){
		if (isset($_POST['criar'])){
			header("location: ./views/create.view.php");
		}
	}

	public function edit($id){
		header("location: ./views/edit.view.php?id=$idn");
	}

	public function delete($id){
		header("location: ./models/delete.php?id=$id");
	}
}


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


tarefas = [ 
	new Tarefa('Ir ao mercado'),
	new Tarefa('Comprar milho'),
	new Tarefa('Estudar modelagem')
];


$tarefas[2]->completar();

*/