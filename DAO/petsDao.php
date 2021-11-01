<?php

    class PetDao {

        private $conexao;
        private $pet;

        public function __construct(Conexao $conexao, Pet $pet){
            $this->conexao = $conexao->conectar();
            $this->pet = $pet;
        }

        public function inserirPet(){  //create
            $query = 'insert into pet (name, especie, raca, porte, nascimento, usuer_id_user) values (?,?,?,?,?,?)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->pet->__get('name'));
            $stmt->bindValue(2, $this->pet->__get('especie'));
            $stmt->bindValue(3, $this->pet->__get('raca'));
            $stmt->bindValue(4, $this->pet->__get('porte'));
            $stmt->bindValue(5, $this->pet->__get('nascimento'));
            $stmt->bindValue(6, $this->pet->__get('usuer_id_user'));
            $stmt->execute();
        }

        public function recuperarPet($name, $especie, $raca, $porte, $nascimento){
            $where = 'where 1=1';

            if($name != null){ $where .= ' AND name like "%'.$name.'%"'; }
            if($especie != null){ $where .= ' AND especie = "'.$especie.'"'; }
            if($raca != null){ $where .= ' AND raca = "'.$raca.'"'; }
            if($porte != null){ $where .= ' AND porte = "'.$porte.'"'; }
            if($nascimento != null){ $where .= ' AND nascimento = "'.$nascimento.'"'; }

            $query = 'select * from pet '.$where.' order by name';
            //print_r($query);
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function verificarPet($name, $raca){
            $where = 'where 1=1';

            if($name != null){ $where .= ' AND name like "%'.$name.'%"'; }
            if($raca != null){ $where .= ' AND raca = "'.$raca.'"'; }

            $query = 'select * from pet '.$where.' order by name';
            //print_r($query);
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function editarPet(){
            $query = 'update pet set name = ?, especie = ?, raca = ?, porte = ?, nascimento = ? where id_pet = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->pet->__get('name'));
            $stmt->bindValue(2, $this->pet->__get('especie'));
            $stmt->bindValue(3, $this->pet->__get('raca'));
            $stmt->bindValue(4, $this->pet->__get('porte'));
            $stmt->bindValue(5, $this->pet->__get('nascimento'));
            $stmt->bindValue(6, $this->pet->__get('id_pet'));
            $stmt->execute();
        }

        public function removerPet(){
            $query = 'delete from pet where id_pet = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->pet->__get('id_pet'));
            $stmt->execute();
        }
    }

?>