<?php

    require '../conexao.php';
	require '../DAO/petsDAO.php';
	require '../model/Pet.php';

	$acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

	if($acao == 'inserir'){

		session_start();

		$pet = new Pet();
		$pet->__set('name', $_POST['nome']);
		$pet->__set('especie', $_POST['especie']);
		$pet->__set('raca', $_POST['raca']);
		$pet->__set('porte', $_POST['porte']);
		$pet->__set('nascimento', $_POST['dataNasc']);
		$pet->__set('usuer_id_user', $_SESSION['id']);

		$conexao = new Conexao();

		$petDao = new PetDao($conexao, $pet);

		$buscarPet = $petDao->verificarPet($_POST['nome'], $_POST['raca']);

		if(!$buscarPet){

			$petDao->inserirPet();

			echo "<script> window.alert('Pet Cadastrado com sucesso!')
						window.location.href = '../Views/listaPets.php'
					</script>";
		}else{

			echo "<script> window.alert('Pet já cadastrado!')
						window.location.href = '../Views/cadastrarPet.php'
					</script>";

		}
		
	} else if($acao == 'recuperar'){

		$pet = new Pet();

		$conexao = new Conexao();

		$petDao = new PetDao($conexao, $pet);

		$pets = $petDao->recuperarPet("", "", "", "","");

	} else if($acao=='editar'){

		$pet = new Pet();
		$pet->__set('name', $_POST['nome']);
		$pet->__set('especie', $_POST['especie']);
		$pet->__set('raca', $_POST['raca']);
		$pet->__set('porte', $_POST['porte']);
		$pet->__set('nascimento', $_POST['dataNasc']);
		$pet->__set('id_pet', $_POST['id_pet']);

		$conexao = new Conexao();

		$petDao = new PetDao($conexao, $pet);

		$petDao->editarPet();

		echo "<script> window.alert('Pet Editado com sucesso!')
						window.location.href = '../Views/listaPets.php'
					</script>";
	} else if($acao == 'remover'){
		$pet = new Pet();
		$pet->__set('id_pet', $_GET['id_pet']);

		$conexao = new Conexao();

		$petDao = new PetDao($conexao, $pet);

		$petDao->removerPet();

		echo "<script> window.alert('Pet Removido com sucesso!')
						window.location.href = '../Views/listaPets.php'
					</script>";

	}

?>