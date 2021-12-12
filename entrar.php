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
    <link rel="stylesheet" type="text/css" href="css/estilo.css">

    <link rel="stylesheet" href="jquery/jquery-3.6.0.min.js">
    <link rel="stylesheet" href="jquery/jquery.mask.js">

    <title>Agendamento Veterinário</title>
  </head>
  <body>

    <header><!--Inicio cabeçalho-->
      <nav class="navbar navbar-expand-sm navbar-light">
        <div class="container">

          <a><img src="img/LogoPetArchive.png"></a>

          <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="nav-principal">
            <ul class="navbar-nav ml-auto">
              <li class="navbar-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header><!--fim cabeçalho-->

    <section id="conteudo" class="bg-info"><!--Inicio seção Conteudo-->
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-3">

          </div>
          <div class="col-md-6 mt-4 mb-4">
            <h1 class="text-center">Entrar</h1>
            <form method="post" action="controller/UserController.php?acao=entrar"> 
              <div class="mb-3">
                  <label for="email" class="form-label">E-mail:</label>
                  <input type="email" class="form-control" name="email" id="email" required>
              </div>
              <div class="mb-3">
                  <label for="Senha" class="form-label">Senha:</label>
                  <input type="password" class="form-control" name="senha" id="senha" required>
              </div>
              <div class="mb-3">
                  <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
              <div class="mb-3">
                  <a href="cadastrarUser.php" class="text-dark">cadastre-se</a>
              </div>
            </form>
          </div>
          <div class="col-md-3">

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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>