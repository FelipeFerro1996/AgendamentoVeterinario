<?php

    require '../conexao.php';
	require '../DAO/UserDAO.php';
	require '../model/User.php';

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir'){

		$user = new User();
		$user->__set('name', $_POST['nome'].' '.$_POST['sobrenome']);
		$user->__set('cpf', $_POST['cpf']);
		$user->__set('celular', $_POST['celular']);
		$user->__set('email', $_POST['email']);
		$user->__set('cep', $_POST['cep']);
		$user->__set('rua', $_POST['rua']);
		$user->__set('nro', $_POST['nro']);
		$user->__set('bairro', $_POST['bairro']);
		$user->__set('cidade', $_POST['cidade']);
		$user->__set('estado', $_POST['estado']);
		$user->__set('senha', $_POST['senha']);

		$conexao = new Conexao();

		$userDao = new UserDAO($conexao, $user);
		
		$userBusca = $userDao->recuperarUserByEmail( $_POST['email']);
		if($userBusca != null){
			echo "<script> window.alert('Essa email já está cadastrado!')
						window.location.href = '../cadastrarUser.php'
					</script>";
		}else{
			$userDao->inserirUser();
			
			echo "<script> window.alert('Inserido com sucesso!')
						window.location.href = '../entrar.php'
					</script>";
		}

	} else if($acao == 'entrar'){

		$user = new User();
		$user->__set('email', $_POST['email']);
		$user->__set('senha', $_POST['senha']);

		$conexao = new Conexao();

		$userDao = new UserDAO($conexao, $user);

		$autenticar = $userDao->autenticar($_POST['email'], $_POST['senha']);

		if($autenticar){
			echo "<script> window.alert('sucesso!')
						window.location.href = '../Views/listaPets.php'
					</script>";

			session_start();

			$_SESSION['email'] =  $autenticar[0]->email;
			$_SESSION['id'] =  $autenticar[0]->id_user;
			$_SESSION['nome'] =  $autenticar[0]->name;
			$_SESSION['time']     = time();
		}else{
			echo "<script> window.alert('Email e senha não cadastrado!')
						window.location.href = '../entrar.php'
					</script>";
		}

	} else if($acao == 'sair'){
		session_start();
		$_SESSION['email'];
		$_SESSION['id'];
		session_destroy();
		echo "<script> window.alert('Sessão encerrada!')
						window.location.href = '../entrar.php'
					</script>";
	} 


?>

?>