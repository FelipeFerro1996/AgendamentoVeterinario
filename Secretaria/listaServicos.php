<?php 

  session_start();

  if(empty($_SESSION['usuario'])){
    echo "<script> window.alert('Usuário e senha não cadastrado!')
            window.location.href = 'index.php'
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
         <div class="col-md-10">
            <h1 class="text-center">Listar Serviço</h1>
         </div>
         <div class="col-md-2">
            <a href="cadastrarServicos.php" class="btn btn-outline-light">
                <i class="fas fa-plus-square"></i>
            </a>
         </div>
        </div>
        
        <div class="row justify-content-md-center">
            <table class="table table-striped bg-primary">
                <thead class="table-dark">
                    <th>Descricao</th>
                    <th>Valor</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                </thead>
                <tbody>
                    <?php
                    if($servicos){
                      foreach ($servicos as $indice => $dados) {
                    ?>

                      <tr>
                        <td><?=$dados->descricao?></td>       
                        <td><?=$dados->valor?></td>
                        <td class="text-center"><i style="color:blue" class="fas fa-edit" onclick="editar('<?=$dados->descricao?>',<?=$dados->valor?>, <?=$dados->id_servico?>)"></i></td>
                        <td class="text-center"><i style="color:red" class="fas fa-trash-alt" onclick="excluir(<?=$dados->id_servico?>)"></i></td>
                      </tr>

                    <?php
                      }
                    }
                    ?>
                </tbody>
            </table>  
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