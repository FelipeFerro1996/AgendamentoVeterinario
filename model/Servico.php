<?php
	
	class Servico{
		private $id_servico;
		private $nome;
		private $valor;
		private $descricao;
		private $classeIcone;

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;
		}

		public function __get($atributo){
			return $this->$atributo;
		}
	}

?>