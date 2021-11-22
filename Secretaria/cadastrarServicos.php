<?php 

  session_start();

  if(empty($_SESSION['usuario'])){
    echo "<script> window.alert('Usuário e senha não cadastrado!')
            window.location.href = 'index.php'
          </script>";
  }

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

    <script type="text/javascript" src="../jquery/jquery-3.6.0.min.js"></script>

    <title>Agendamento Veterinário</title>
  </head>
  <body>

    <header><!--Inicio cabeçalho-->
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">

          <a><img src="../img/LogoPetArchive.png"></a>
          <span><?=isset($_SESSION['usuario']) ? $_SESSION['usuario'] : ''?></span>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="navbar-item">
                <a href="listaServicos.php" class="nav-link">Serviços</a>
              </li>
              <li class="navbar-item">
                <a href="#" class="nav-link">Agendamentos</a>
              </li>
              <li class="navbar-item">
                <a href="../controller/SecretariaController.php?acao=sair" class="btn btn-outline-light ml-4">Sair</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header><!--fim cabeçalho-->

    <section id="conteudo" class="bg-info"><!--Inicio seção Conteudo-->
      <div class="container">
        <div class="row justify-content-md-center pt-4 pb-4">
         <div class="col-md-12">
            <h1 class="text-center">Cadastrar Serviço</h1>
         </div>
        </div>
        
        <div class="row justify-content-md-center">
            <div class="col-md-12">
                <form method="post" action="../controller/ServicoController.php?acao=inserir">
                    <div class="row justify-content-md-center" style="margin-top: 10px; margin-bottom: 10px">
                        <div class="col-6">
                            <label>Nome:</label>
                        </div>
                        <div class="col-3">
                            <label>Ícone:</label>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome:" required>
                        </div>
                        <div class="col-3">
                            <input type="text" name="icone" class="form-control" id="icone" placeholder="Ícone:" required>
                        </div>
                    </div>

                    <div class="row justify-content-md-center" style="margin-top: 10px; margin-bottom: 10px">
                        <div class="col-6">
                            <label>Descrição:</label>
                        </div>
                        <div class="col-3">
                            <label>Valor:</label>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <input type="text" name="descricao" class="form-control" id="descricao" placeholder="Descrição:" required>
                        </div>
                        <div class="col-3">
                            <input type="float" name="valor" class="form-control" id="valor" required>
                        </div>
                    </div>

                    <div class="row justify-content-md-center pt-2 pb-4">
                        <div class="col-3">
                            <button type="submit" class="btn btn-primary">Cadastarar</button>
                        </div>
                        <div class="col-6"></div>
                    </div>
                </form>
            </div>
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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>
        $(document).ready(() => {
            $("#buscarAgendamentos").click(() => {
                $.get("tabelaAgendamentos.php?dataSel="+$("#dataSel").val(), (data, status) => {
                    alert(status);
                    $("#tabelaAgendamentos").empty();
                    $("#tabelaAgendamentos").append(data);
                })
            })
        })
    </script>
  </body>
</html>