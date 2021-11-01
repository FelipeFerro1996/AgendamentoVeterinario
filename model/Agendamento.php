<?php
	
	class Agendamento{
		private $id_agendamento;
		private $data;
		private $hora;
		private $obs;
		private $pet_id_pet;
		private $servico_id_servico;

		public function __set($atributo, $valor){
			$this->$atributo = $valor;
			return $this;
		}

		public function __get($atributo){
			return $this->$atributo;
		}
	}

?>