<?php

    require '../conexao.php';
	require '../DAO/petsDAO.php';
	require '../model/Pet.php';
	require '../DAO/agendamentoDao.php';
	require '../model/Agendamento.php';
	require '../DAO/servicosDAO.php';
	require '../model/Servico.php';

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir'){



	}

?>