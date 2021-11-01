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

    <script type="text/javascript" src="jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="jquery/jquery.mask.js"></script>

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
                <a href="" class="nav-link">Home</a>
              </li>
              <li class="navbar-item">
                <a href="" class="nav-link">Serviços</a>
              </li>
              <li class="navbar-item">
                <a href="" class="nav-link">Sobre-nós</a>
              </li>
              <li class="navbar-item">
                <a href="" class="btn btn-outline-light ml-4">Entrar</a>
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
            <img src="img/pug2.png" class="img-fluid">
          </div>
        </div>
      </div>
    </section><!--fim seção home-->

    <section id="conteudo" class="bg-info"><!--Inicio seção Conteudo-->
      <div class="container">
        <div class="row justify-content-md-center">
          <div class="col-md-12 mt-4 mb-4">
            <h1 class="text-center">Cadastrar</h1>
            <form action="controller/UserController.php?acao=inserir" method="post">
                <div class="container">

                    <div class="row justify-content-md-center" style="margin-top: 10px; margin-bottom: 10px">
                        <div class="col-5">
                            <label>Nome:</label>
                        </div>
                        <div class="col-5">
                            <label>Sobrenome:</label>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-5">
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome:">
                        </div>
                        <div class="col-5">
                            <input type="text" name="sobrenome" class="form-control" id="nome" placeholder="Sobrenome:">
                        </div>
                    </div>

                    <div class="row justify-content-md-center " style="margin-top: 10px; margin-bottom: 10px">
                        <div class="col-5">
                            <label>CPF:</label>
                        </div>
                        <div class="col-5">
                            <label>Celular:</label>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-5">
                            <input type="text" name="cpf" class="form-control cpf" id="cpf" placeholder="CPF:">
                        </div>
                        <div class="col-5">
                            <input type="text" name="celular" class="form-control phone" id="celular" placeholder="Celular:">
                        </div>
                    </div>

                    <div class="row justify-content-md-center " style="margin-top: 10px; margin-bottom: 10px">
                        <div class="col-10">
                            <label>Email:</label>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-10">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Email:">
                        </div>
                    </div>

                    <div class="row justify-content-md-center " style="margin-top: 10px; margin-bottom: 10px">
                        <div class="col-3">
                            <label>CEP:</label>
                        </div>
                        <div class="col-6">
                            <label>Rua:</label>
                        </div>
                        <div class="col-1">
                            <label>Numero:</label>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-3">
                            <input type="text" name="cep" class="form-control cep" id="cep" placeholder="Cep:">
                        </div>
                        <div class="col-6">
                            <input type="text" name="rua" class="form-control" id="rua" placeholder="Rua:" readonly>
                        </div>
                        <div class="col-1">
                            <input type="text" name="nro" class="form-control" id="nro" placeholder="NRO:" >
                        </div>
                    </div>

                    <div class="row justify-content-md-center " style="margin-top: 10px; margin-bottom: 10px">
                        <div class="col-3">
                            <label>Bairro:</label>
                        </div>
                        <div class="col-3">
                            <label>Cidade:</label>
                        </div>
                        <div class="col-3">
                            <label>Estado:</label>
                        </div>
                        <div class="col-1">
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-3">
                            <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro:" readonly>
                        </div>
                        <div class="col-3">
                            <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade:" readonly>
                        </div>
                        <div class="col-3">
                            <input type="text" name="estado" class="form-control" id="estado" placeholder="Estado:" readonly>
                        </div>
                        <div class="col-1">
                        </div>
                    </div>

                    <div class="row justify-content-md-center " style="margin-top: 10px; margin-bottom: 10px">
                        <div class="col-6">
                            <label>Senha:</label>
                        </div>
                    </div>

                    <div class="row justify-content-md-center">
                        <div class="col-6">
                            <input type="password" name="senha" class="form-control" id="senha" placeholder="Senha:">
                        </div>
                       
                    </div>
                    
                    <div class="row justify-content-md-center">
                        <div class="col-3" style="margin-top: 5px">
                            <button type="submit" class="btn btn-success">Cadastarar</button>
                        </div>
                        <div class="col-7"></div>
                    </div>
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
        $(document).ready(function(){
          $('.date').mask('00/00/0000');
          $('.time').mask('00:00:00');
          $('.cep').mask('00000-000');
          $('.phone').mask('(00) 00000-0000');
          $('.cpf').mask('000.000.000-00');
          $('.money').mask('000.000.000.000,00');

        });
    </script>

<script>
    $(document).ready(() => {
       
     $('#cep').blur(() => {
      $.get("https://viacep.com.br/ws/"+$('#cep').val()+"/json/", (data, status) => {
        if(status == 'success'){
          alert(status);
          $('#rua').val(data["logradouro"]);
          $('#bairro').val(data["bairro"]);
          $('#cidade').val(data["localidade"]);
          $('#estado').val(data["uf"]);
        }else{
          alert(status);
        }
      })
     })

    })
</script>

    <script>
        $(document).ready(() => {
          
          $('#cep').blur(function () {
            $.get("viacep.com.br/ws/01001000/json/", (data, status) => {
              alert(status);
            });
          });

        });
    </script>

  </body>
</html>