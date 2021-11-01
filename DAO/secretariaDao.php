<?php

    class SecretariaDao {

        private $conexao;
        private $secretaria;

        public function __construct(Conexao $conexao, Secretaria $secretaria){
            $this->conexao = $conexao->conectar();
            $this->secretaria = $secretaria;
        }

        public function autenticar($usuario, $senha){

            $query = 'select * from secretaria where usuario = ? AND senha = ?';
            //print_r($query);
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->secretaria->__get('usuario'));
            $stmt->bindValue(2, $this->secretaria->__get('senha'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }

?>