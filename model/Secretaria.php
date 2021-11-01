<?php
	
	class Secretaria{
		private $id;
		private $usuario;
		private $senha;

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;
		}

		public function __get($atributo){
			return $this->$atributo;
		}
	}

?>