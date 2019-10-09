<?php 
class Tarefa {
	public $id;
	public $status;
	public $tarefa;
	public $data_cadastro;

	public function __get($atributo) {
		return $this->$atributo;
	}

	public function __set($atributo, $valor) {
		$this->$atributo = $valor;
	}
}
?>