<?php
	
	class Pet{
		private $id_pet;
		private $name;
		private $especie;
		private $raca;
        private $porte;
		private $nascimento;
		private $usuer_id_user;

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;
		}

		public function __get($atributo){
			return $this->$atributo;
		}
	}

?>