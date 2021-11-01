<?php

    class UserDAO {

        private $conexao;
        private $user;

        public function __construct(Conexao $conexao, User $user){
            $this->conexao = $conexao->conectar();
            $this->user = $user;
        }

        public function inserirUser(){  //create
            $query = 'insert into usuer (name, cpf, celular, email, cep, rua, nro, bairro, cidade, estado, senha) values (?,?,?,?,?,?,?,?,?,?,?)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->user->__get('name'));
            $stmt->bindValue(2, $this->user->__get('cpf'));
            $stmt->bindValue(3, $this->user->__get('celular'));
            $stmt->bindValue(4, $this->user->__get('email'));
            $stmt->bindValue(5, $this->user->__get('cep'));
            $stmt->bindValue(6, $this->user->__get('rua'));
            $stmt->bindValue(7, $this->user->__get('nro'));
            $stmt->bindValue(8, $this->user->__get('bairro'));
            $stmt->bindValue(9, $this->user->__get('cidade'));
            $stmt->bindValue(10, $this->user->__get('estado'));
            $stmt->bindValue(11, $this->user->__get('senha'));
            $stmt->execute();
    
            return $query;
        }

        public function recuperarUserByEmail($email){

            $query = 'select * from usuer where email = ?';
            //print_r($query);
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->user->__get('email'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function autenticar($email, $senha){

            $query = 'select * from usuer where email = ? AND senha = ?';
            //print_r($query);
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->user->__get('email'));
            $stmt->bindValue(2, $this->user->__get('senha'));
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function atualizarServico(){
            $query = 'update servicos set descricao = ?, valor = ? where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->servico->__get('descricao'));
            $stmt->bindValue(2, $this->servico->__get('valor'));
            $stmt->bindValue(3, $this->servico->__get('id'));
            $stmt->execute();
        }

        public function removerServico(){
            $query = 'delete from servicos where id = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->servico->__get('id'));
            $stmt->execute();
        }
    }

?>