<?php

    require '../conexao.php';
	require '../DAO/servicoDao.php';
	require '../model/Servico.php';

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir'){

		session_start();

		$servico = new Servico();
		$servico->__set('descricao', $_POST['descricao']);
		$servico->__set('valor', $_POST['valor']);

		$conexao = new Conexao();

		$servicoDao = new ServicoDao($conexao, $servico);

		$buscarServico = $servicoDao->verificarServico($_POST['descricao']);

		if(!$buscarServico){

			$servicoDao->inserirServico();

			echo "<script> window.alert('Serviço Cadastrado com sucesso!')
						window.location.href = '../Secretaria/listaServicos.php'
					</script>";
		}else{

			echo "<script> window.alert('Serviço já cadastrado!')
						window.location.href = '../Secretaria/cadastrarServico.php'
					</script>";

		}
		
	} else if($acao == 'recuperar'){

		$servico = new Servico();

		$conexao = new Conexao();

		$servicoDao = new ServicoDao($conexao, $servico);

		$servicos = $servicoDao->recuperarServico("", "");

	} else if($acao=='editar'){

		$servico = new Servico();
		$servico->__set('descricao', $_POST['descricao']);
		$servico->__set('valor', $_POST['valor']);

		$conexao = new Conexao();

		$servicoDao = new ServicoDao($conexao, $servico);

		$servicoDao->editarServico();

		echo "<script> window.alert('Serviço Editado com sucesso!')
						window.location.href = '../Secretaria/listaServicos.php'
					</script>";
	} else if($acao == 'remover'){
		$servico = new Servico();
		$servico->__set('id_servico', $_GET['id_servico']);

		$conexao = new Conexao();

		$servicoDao = new ServicoDao($conexao, $servico);

		$servicoDao->removerServico();

		echo "<script> window.alert('Serviço Removido com sucesso!')
						window.location.href = '../Secretaria/listaServicos.php'
					</script>";

	}

?>

?>