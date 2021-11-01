<?php
	
	class User{
		private $id_user;
		private $name;
		private $cpf;
        private $celular;
        private $email;
		private $cep;
		private $rua;
        private $nro;
        private $bairro;
        private $cidade;
        private $estado;
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