<?php 

  session_start();

  if(empty($_SESSION['email'])){
    echo "<script> window.alert('Email e senha não cadastrado!')
            window.location.href = '../entrar.php'
          </script>";
  }

  $acao = 'recuperar';
  require "../controller/ServicoController.php";

?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!-- Estilo customizado -->
    <link rel="stylesheet" type="text/css" href="../css/estilo.css">

    <link rel="stylesheet" href="jquery/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="jquery/jquery.mask.js">

    <title>Agendamento Veterinário</title>

    <script type="text/javascript">
      function editar(name, especie, raca, porte, nascimento, id_pet){
        location.href = "editarPet.php?name="+name+"&especie="+especie+"&raca="+raca+"&porte="+porte+"&nascimento="+nascimento+"&id_pet="+id_pet;
      }

      function excluir(id_pet){
        location.href = "../controller/PetsController.php?acao=remover&id_pet="+id_pet;
      }
    </script>

  </head>
  <body>

    <header><!--Inicio cabeçalho-->
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">

          <a><img src="../img/LogoPetArchive.png"></a>
          <span><?=isset($_SESSION['email']) ? $_SESSION['email'] : ''?></span>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="navbar-item">
                <a href="home.php" class="nav-link">Home</a>
              </li>
              <li class="navbar-item">
                <a href="listaServicos.php" class="nav-link">Serviços</a>
              </li>
              <li class="navbar-item">
                <a href="sobreNos.php" class="nav-link">Sobre-nós</a>
              </li>
              <li class="navbar-item">
                <a href="cadastrarAgendamento.php" class="nav-link">Agendamentos</a>
              </li>
              <li class="navbar-item">
                <a href="#" class="nav-link">Pets</a>
              </li>
              <li class="navbar-item">
                <a href="../controller/UserController.php?acao=sair" class="btn btn-outline-light ml-4">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header><!--fim cabeçalho-->

    <section id="home" ><!--Inicio seção home-->
      <div class="container">
        <div class="row">
          <div class="col-md-6 d-flex">
            
            <div class="align-self-center">
              <h1 class="display-4">A saúde do seu pet é o nosso objetivo!!</h1>
              <p>
                Traga o seu Pet para realizar os nossos procedimentos! Aqui o seu Pet receberá tratamento Vip!
              </p>

              <p>Disponível para
                <a href="" class="btn btn-outline-light">
                  <i class="fab fa-android fa-lg"></i>
                </a>
                <a href="" class="btn btn-outline-light">
                  <i class="fab fa-apple fa-lg"></i>
                </a>
              </p>

            </div>

          </div>
          <div class="col-md-6 d-none d-md-block">
            <img src="../img/pug2.png" class="img-fluid">
          </div>
        </div>
      </div>
    </section><!--fim seção home-->

    <section id="conteudo" class="bg-info"><!--Inicio seção Conteudo-->
       <div class="container">
        <div class="row justify-content-md-center pt-4 pb-4">
         <div class="col-md-12">
            <h1 class="text-center">Serviços Oferecidos</h1>
         </div>
        </div>
        <div class="row">
          <?php
          foreach($servicos as $indice => $servico){
          ?>

            <div class="col m-2">
              <div class="card bg-success bg-gradiente" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title"><?=$servico->descricao?></h5>
                  <h6 class="card-title">$ <?=$servico->valor?></h6>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            </div>

          <?php
          }
          ?>
        </div>
       </div>
    </section><!--Inicio seção Conteudo-->

    <footer>
      <div class="container pt-4 pb-4">
        <div class="row">
          <div class="col"></div>
          <div class="col-md-4 d-flex justify-content-center">
            <a href="" class="btn btn-outline-light">
              <i class="fab fa-facebook"></i>
            </a>
            <a href="" class="btn btn-outline-light ml-2">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="btn btn-outline-light ml-2">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="btn btn-outline-light ml-2">
              <i class="fab fa-youtube"></i>
            </a>
          </div>
          <div class="col"></div>
        </div>
      </div>
    </footer>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>