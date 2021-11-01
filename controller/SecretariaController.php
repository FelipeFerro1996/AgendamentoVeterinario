<?php

    require '../conexao.php';
	require '../DAO/secretariaDao.php';
	require '../model/Secretaria.php';

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'entrar'){
		$secretaria = new Secretaria();
		$secretaria->__set('usuario', $_POST['usuario']);
		$secretaria->__set('senha', $_POST['senha']);

		$conexao = new Conexao();

		$secretariaDao = new SecretariaDao($conexao, $secretaria);

		$autenticar = $secretariaDao->autenticar($_POST['usuario'], $_POST['senha']);

		if($autenticar){
			echo "<script> window.alert('sucesso!')
						window.location.href = '../Secretaria/listaServicos.php'
					</script>";

			session_start();

			$_SESSION['usuario'] =  $autenticar[0]->usuario;
			$_SESSION['id'] =  $autenticar[0]->id;
			$_SESSION['time']     = time();
		}else{
			echo "<script> window.alert('Usuario e senha não cadastrado!')
						window.location.href = '../Secretaria/index.php'
					</script>";
		}
	} else if($acao == 'sair'){
		session_start();
		$_SESSION['usuario'];
		$_SESSION['id'];
		session_destroy();
		echo "<script> window.alert('Sessão encerrada!')
						window.location.href = '../Secretaria/index.php'
					</script>";
	}