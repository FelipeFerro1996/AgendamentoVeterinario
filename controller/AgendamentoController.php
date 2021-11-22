<?php

    require '../conexao.php';
	require '../DAO/petsDAO.php';
	require '../model/Pet.php';
	require '../DAO/agendamentoDao.php';
	require '../model/Agendamento.php';
	require '../DAO/servicoDAO.php';
	require '../model/Servico.php';

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir'){

		session_start();

		$agendamento = new Agendamento();
        $agendamento->__set('data', $_POST['data']);
        $agendamento->__set('hora', $_POST['hora']);
        $agendamento->__set('obs', $_POST['obs']);
        $agendamento->__set('pet_id_pet', $_POST['pet']);
        $agendamento->__set('servico_id_servico', $_POST['servico']);
        $agendamento->__set('usuer_id_user', $_SESSION['id']);

		print_r($agendamento);

		$conexao = new Conexao();
		$agendamentoDao = new AgendamentoDAO($conexao, $agendamento);
		$agendamentoDao->inserirAgendamento();

		echo "<script> window.alert('Agendamento Cadastrado com sucesso!')
						window.location.href = '../Views/meusAgendamentos.php'
					</script>";

	}else if($acao == 'recuperar'){

		//session_start();

		$pet = new Pet();
		$servico = new Servico();
		$agendamento = new Agendamento();

		$conexao = new Conexao();

		$petDao = new PetDao($conexao, $pet);
		$servicoDao = new ServicoDao($conexao, $servico);

		$pets = $petDao->recuperarPet("", "", "", "","",$_SESSION['id']);
		$servicos = $servicoDao->recuperarServico("", "");

		$agendamentoDao = new AgendamentoDAO($conexao, $agendamento);
		$agendamentos = $agendamentoDao->recuperarAgendamentos($_SESSION['id'], "");
		
	}

?>