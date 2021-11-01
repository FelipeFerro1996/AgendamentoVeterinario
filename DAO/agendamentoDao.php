<?php

    class AgendamentoDao {

        private $conexao;
        private $agendamento;

        public function __construct(Conexao $conexao, Agendamento $agendamento){
            $this->conexao = $conexao->conectar();
            $this->agendamento = $agendamento;
        }

        

    }

?>