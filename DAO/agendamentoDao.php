<?php

    class AgendamentoDao {

        private $conexao;
        private $agendamento;

        public function __construct(Conexao $conexao, Agendamento $agendamento){
            $this->conexao = $conexao->conectar();
            $this->agendamento = $agendamento;
        }

        public function inserirAgendamento(){  //create
            $query = 'insert into agendamento (data, hora, obs, pet_id_pet, servico_id_servico, usuer_id_user) values (?,?,?,?,?,?)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(1, $this->agendamento->__get('data'));
            $stmt->bindValue(2, $this->agendamento->__get('hora'));
            $stmt->bindValue(3, $this->agendamento->__get('obs'));
            $stmt->bindValue(4, $this->agendamento->__get('pet_id_pet'));
            $stmt->bindValue(5, $this->agendamento->__get('servico_id_servico'));
            $stmt->bindValue(6, $this->agendamento->__get('usuer_id_user'));
            $stmt->execute();
        }

        public function recuperarAgendamentos($usuario, $data){
            $where = 'where 1=1';

            if($usuario != null){ $where .= ' AND a.usuer_id_user = '.$usuario.''; }
            if($data != null){ $where .= ' AND a.data = "'.$data.'"'; }

            $query = 'select 
                            a.data, a.hora, a.obs, p.name as pet, u.name as dono, s.nome as servico 
                        from agendamento as a
                            inner join servico as s 
                                on s.id_servico = a.servico_id_servico
                            inner join pet as p 
                                on p.id_pet = a.pet_id_pet 
                            inner join usuer as u 
                                on u.id_user = a.usuer_id_user 
                        '.$where.' order by a.data, a.hora';
            //print_r($query);
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

    }

?>