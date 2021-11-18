<?php

    class ServicoDao {

        private $conexao;
        private $servico;

        public function __construct(Conexao $conexao, Servico $servico){
            $this->conexao = $conexao->conectar();
            $this->servico = $servico;
        }

        public function inserirServico(){  //create
            $query = 'insert into servico (nome, icone, descricao, valor) values (?,?,?,?)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->servico->__get('nome'));
            $stmt->bindValue(2, $this->servico->__get('icone'));
            $stmt->bindValue(3, $this->servico->__get('descricao'));
            $stmt->bindValue(4, $this->servico->__get('valor'));
            $stmt->execute();
        }

        public function recuperarServico($descricao, $valor){
            $where = 'where 1=1';

            if($descricao != null){ $where .= ' AND descricao like "%'.$descricao.'%"'; }
            if($valor != null){ $where .= ' AND valor = '.$valor.''; }
    
            $query = 'select * from servico '.$where.' order by descricao';
            //print_r($query);
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function verificarServico($descricao){
            $where = 'where 1=1';

            if($descricao != null){ $where .= ' AND descricao like "%'.$descricao.'%"'; }

            $query = 'select * from servico '.$where.' order by descricao';
            //print_r($query);
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function editarServico(){
            $query = 'update servico set nome = ?, icone = ?, descricao = ?, valor = ? where id_pet = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->servico->__get('nome'));
            $stmt->bindValue(2, $this->servico->__get('icone'));
            $stmt->bindValue(3, $this->servico->__get('descricao'));
            $stmt->bindValue(4, $this->servico->__get('valor'));
            $stmt->bindValue(5, $this->servico->__get('id_pet'));
            $stmt->execute();
        }

        public function removerServico(){
            $query = 'delete from servico where id_servico = ?';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->servico->__get('id_servico'));
            $stmt->execute();
        }
    }
?>