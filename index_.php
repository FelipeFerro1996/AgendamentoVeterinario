<?php
require 'conexao.php';
require 'DAO/servicoDao.php';
require 'model/Servico.php';

$servico = new Servico();

$conexao = new Conexao();

$servicoDao = new ServicoDao($conexao, $servico);

$servicos = $servicoDao->recuperarServico("", "");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pet Archive - Agendamento Veterinário</title>

    <!-- Fonte padrão para o corpo do texto-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">

    <!-- Documeto de customização do CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Começo do cabeçalho de apresentação -->

    <header class="header">

        <a href="#" class="logo"> <i class="fas fa-paw"> </i> Pet Archive™ </a>

        <nav class="navbar" style="font-size:2px">
            <a href="#inicio">Início</a>
            <a href="#servicos">Serviços</a>
            <a href="#sobre">Sobre Nós</a>
            <a href="#contatos">Contatos</a>
            <a href="#cadastro">Cadastro</a>
            <a href="#avaliacoes">Avaliações</a>
            <a href="#cuidados">Cuide do seu PET</a>
        </nav>
        <nav class="navbar">
            <a href="entrar.php">Entrar</a>
        </nav>

        <div id="menu-btn" class="fas fa-bars"></div>

    </header>

    <!-- Final do cabeçalho de apresentação -->

    <!-- Início da seção -->

    <section class="inicio" id=inicio>

        <div class="image">
            <image src="images/inicio-img.svg" alt="">

        </div>

        <div class="content">
            <h3>A saúde do seu Pet é o nosso objetivo!</h3>
            <p>Agendar uma consulta para o seu bichinho nem sempre foi uma tarefa simples e rápida? É para isso que o Pet Archive foi especialmente pensado. Agilize e otimize o agendamento de pet's de pequeno e grande porte, contendo não só um layout prático
                e interativo, mas também um novo novo conceito de consultas veterinárias.</p>
            <a href="#" class="btn"> Contate-nos ➤ <span class="fas fa-hevron-right"> </span> </a>
        </div>

    </section>

    <!-- Final da seção -->

    <!-- Início da seção de ícones -->

    <section class="icons-container">

        <div class="icons">
            <i class="fas fa-user-md"></i>
            <h3>+120</h3>
            <p>Profissionais</p>
        </div>

        <div class="icons">
            <i class="fas fa-users"></i>
            <h3>+1200</h3>
            <p>Clientes satisfeitos</p>
        </div>

        <div class="icons">
            <i class="fas fa-dog"></i>
            <h3>+500</h3>
            <p>Pet's atendidos</p>
        </div>

        <div class="icons">
            <i class="fas fa-hospital"></i>
            <h3>+60</h3>
            <p>Clínicas</p>
        </div>

    </section>

    <!-- Final da seção de ícones -->

    <!-- Início da seção de serviços -->

    <!--<section class="servicos" id="servicos">
        <h1 class="heading"> SERVIÇOS <span> OFERECIDOS </span> </h1>

        <div class="box-container">

            <div class="box">
                <i class="fas fa-user-md"></i>
                <h3>Consulta</h3>
                <p>Na consulta, são verificados os olhos, boca, peso corporal e entre outros...</p>
                <a href="#" class="btn"> Leia mais ➤ <span class="fas fa-chavron-right"> </span> </a>
            </div>

            <div class="box">
                <i class="fas fa-syringe"></i>
                <h3>Vacinação</h3>
                <p>A vacinação previne o contágio do animal com agentes infecciosos e permite...</p>
                <a href="#" class="btn"> Leia mais ➤ <span class="fas fa-chavron-right"> </span> </a>
            </div>

            <div class="box">
                <i class="fas fa-globe-americas"></i>
                <h3>Microchip</h3>
                <p>O microchip é inserido na pele como se fosse uma vacina, sem qualquer tipo de dor...</p>
                <a href="#" class="btn"> Leia mais ➤ <span class="fas fa-chavron-right"> </span> </a>
            </div>

            <div class="box">
                <i class="fas fa-pills"></i>
                <h3>Castração</h3>
                <p>O objetivo mais conhecido é evitar a gravidez indesejada, mas...</p>
                <a href="#" class="btn"> Leia mais ➤ <span class="fas fa-chavron-right"> </span> </a>
            </div>

            <div class="box">
                <i class="fas fa-heartbeat"></i>
                <h3>internação</h3>
                <p>A Internação ajuda os pacientes que necessitam ficar em observação...</p>
                <a href="#" class="btn"> Leia mais ➤ <span class="fas fa-chavron-right"> </span> </a>
            </div>

            <div class="box">
                <i class="fas fa-truck"></i>
                <h3>Uber Animal</h3>
                <p>É oferecida a opção de buscar seu peludo em casa e levá-lo de volta, após o atendimento...</p>
                <a href="#" class="btn"> Leia mais ➤ <span class="fas fa-chavron-right"> </span> </a>
            </div>

    </section>-->

    <section class="servicos" id="servicos">
        <h1 class="heading"> SERVIÇOS <span> OFERECIDOS </span> </h1>

        <div class="box-container">

            <?php
            foreach($servicos as $indice => $servico){
            ?>
                <div class="box">
                    <i class="<?= $servico->icone ?>"></i>
                    <h3><?= $servico->nome ?></h3>
                    <p><?= $servico->descricao ?></p>
                    <a href="#" class="btn"> Leia mais ➤ <span class="fas fa-chavron-right"> </span> </a>
                </div>
            <?php
            }
            ?>

    </section>

    <!-- Final da seção de serviços -->

    <!-- Início da seção de sobre nós -->

    <section class="sobre" id="sobre">
        <h1 class="heading"> <span> Sobre </span> nós </h1>

        <div class="row">
            <div class="image">
                <img src="images/sobre-img.png" alt="">

            </div>

            <div class="content">
                <h3>PET Archive</h3>
                <p>É um sistema voltado para agendamento de consultas veterinárias, possibilitando o usuário inserir os dados do seu Pet, como não só o nome, raça, idade, porte e histórico de doenças, mas também escolher o serviço pelo qual busca (Vacina/Consulta/Atestado
                    de Viagem/MicroChip).</p>

                <a href="#" class="btn"> Leia mais ➤ <span class="fas-chevron-right"></span> </a>

            </div>

        </div>

    </section>

    <!-- Fim da seção de sobre nós -->

    <!-- Início da seção de veterinários -->

    <section class="contatos" id="contatos">
        <h1 class="heading"> Painel de <span> veterinários </span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/vet-1.jpg" alt="">
                <h3>Dra. Virgínia Sousa</h3>
                <span>Veterinária Cirúrgica</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"> </a>
                    <a href="#" class="fab fa-twitter"> </a>
                    <a href="#" class="fab fa-instagram"> </a>
                    <a href="#" class="fab fa-linkedin"> </a>

                </div>

            </div>

            <div class="box">
                <img src="images/vet-2.jpg" alt="">
                <h3>Dr. Eduardo Ribeiro</h3>
                <span>Clínico Veterinário</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"> </a>
                    <a href="#" class="fab fa-twitter"> </a>
                    <a href="#" class="fab fa-instagram"> </a>
                    <a href="#" class="fab fa-linkedin"> </a>

                </div>

            </div>

            <div class="box">
                <img src="images/vet-3.jpg" alt="">
                <h3>Dra. Helena Vasconcelos</h3>
                <span>Veterinária Laboratorial</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"> </a>
                    <a href="#" class="fab fa-twitter"> </a>
                    <a href="#" class="fab fa-instagram"> </a>
                    <a href="#" class="fab fa-linkedin"> </a>

                </div>

            </div>

            <div class="box">
                <img src="images/vet-4.jpg" alt="">
                <h3>Dr. Marcos Araújo</h3>
                <span>Imunologista Veterinário</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"> </a>
                    <a href="#" class="fab fa-twitter"> </a>
                    <a href="#" class="fab fa-instagram"> </a>
                    <a href="#" class="fab fa-linkedin"> </a>

                </div>

            </div>

            <div class="box">
                <img src="images/vet-5.jpg" alt="">
                <h3>Dra. Cecília Guimarães</h3>
                <span>Veterinária Farmacêutica</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"> </a>
                    <a href="#" class="fab fa-twitter"> </a>
                    <a href="#" class="fab fa-instagram"> </a>
                    <a href="#" class="fab fa-linkedin"> </a>

                </div>

            </div>

            <div class="box">
                <img src="images/vet-6.jpg" alt="">
                <h3>Dr. Felipe Carvalho</h3>
                <span>Assistente Veterinário</span>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"> </a>
                    <a href="#" class="fab fa-twitter"> </a>
                    <a href="#" class="fab fa-instagram"> </a>
                    <a href="#" class="fab fa-linkedin"> </a>

                </div>

            </div>

        </div>

    </section>

    <!-- Fim da seção de veterinários -->

    <!-- Início da seção de cadastro -->

    <section class="cadastro" id="cadastro">

        <h1 class="heading"> <span> Seja </span> membro! </h1>

        <div class="row">

            <div class="images">
                <img src="images/about-img.svg" alt="">
            </div>

            <form action="" id="frm_id">
                <h3>Ficha de cadastro</h3>
                <input type="text" id="nome" placeholder="Seu nome" class="box" required>
                <input type="number" id="num" placeholder="Seu número" class="box" required>
                <input type="email" id="email" placeholder="Seu e-mail" class="box" required>
                <input type="date" id="date" class="box" required>
                <input type="submit" id="enviar" value="Enviar" class="btn" onclick="validar()">
            </form>
        </div>

    </section>

    <!-- Fim da seção de cadastro -->

    <!-- Início da seção de cadastro -->

    <section class="avaliacoes" id="avaliacoes">

        <h1 class="heading"> Mural de <span> Avaliações </span> </h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic-1.jpg" alt="">
                <h3>Breno Carvalho</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <p class="text"> Serviço de excelente qualidade! Fiquei um pouco recioso no começo para contratar esse tipo de ferramenta para a minha clínica, porém me foi mostrado um grande retorno por parte de meus clientes. Agradecido!</p>

            </div>

            <div class="box">
                <img src="images/pic-2.jpg" alt="">
                <h3>Felipe Ferro</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>

                </div>
                <p class="text"> Utilizo o PET Archive há 2 anos e posso dizer com firmeza que a contratação desse serviço foi uma das melhores iniciativas para o meu negócio! Eu gostaria de agradecê-los pelo excelente trabalho, qualificação e dedicação a toda equipe
                    envolvida. Muito obrigado!

            </div>

            <div class="box">
                <img src="images/pic-3.jpg" alt="">
                <h3>Matheus Fagundes</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>

                </div>
                <p class="text"> O serviço fornecido foi conforme o prometido! Depois que implantei esse sistema, o meu negócio alcançou novos horizontes, como também gostaria de destacar o atendimento pós venda, no qual se mostraram atenciosos a todo momento. Obrigado!</p>

            </div>

        </div>

    </section>

    <!-- Final da seção de cadastro -->

    <!-- Início da seção de cuidados -->

    <section class="cuidados" id="cuidados">

        <h1 class="heading"> Cuide do seu <span> PET </span> </h1>

        <div class="box-container">

            <div class="box">
                <div class="images">
                    <img src="images/blog-1.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"> </i> 05 de agosto de 2021 </a>
                        <a href="#"> <i class="fas fa-user"> </i> by Matheus </a>
                    </div>
                    <h3>5 tipos de exames indispensáveis para o seu pet</h3>
                    <p>Manter nossos pets saudáveis e cheios de energia é tudo o que desejamos, assim listamos para você...</p>
                    <a href="#" class="btn"> Leia mais ➤ </a>
                </div>
            </div>

            <div class="box">
                <div class="images">
                    <img src="images/blog-2.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"> </i> 12 de maio de 2021 </a>
                        <a href="#"> <i class="fas fa-user"> </i> by Felipe </a>
                    </div>
                    <h3>Sim! O seu bicinho também deve cuidar dos dentes</h3>
                    <p>O mau hálito de cães e gatos não é considerado algo normal, por outro lado...</p>
                    <a href="#" class="btn"> Leia mais ➤ </a>
                </div>
            </div>

            <div class="box">
                <div class="images">
                    <img src="images/blog-3.jpg" alt="">
                </div>
                <div class="content">
                    <div class="icon">
                        <a href="#"> <i class="fas fa-calendar"> </i> 23 de fevereiro de 2021 </a>
                        <a href="#"> <i class="fas fa-user"> </i> by Breno </a>
                    </div>
                    <h3>Quais as vantagens de adotar um animal?</h3>
                    <p>É dito que os animais ao serem adotados, cria-se um vínculo entre você e ele...</p>
                    <a href="#" class="btn"> Leia mais ➤ </a>
                </div>
            </div>


        </div>

    </section>

    <!-- Final da seção de cuidados -->

    <!-- Início da seção de rodapé -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Atalhos</h3>
                <a href="#"> <i class="fas fa-home"> </i> início </a>
                <a href="#"> <i class="fas fa-hand-holding-medical"> </i> Serviços </a>
                <a href="#"> <i class="fas fa-user-friends"> </i> Sobre Nós </a>
                <a href="#"> <i class="fas fa-briefcase-medical"> </i> Contatos </a>
                <a href="#"> <i class="fas fa-address-book"> </i> Cadastro </a>
                <a href="#"> <i class="fas fa-star"> </i> Avaliações </a>
                <a href="#"> <i class="fas fa-paw"> </i> Cuide do seu PET </a>
            </div>

            <div class="box">
                <h3>Outros exames</h3>
                <a href="#"> <i class="fas fa-microscope"> </i> Biópisia </a>
                <a href="#"> <i class="fas fa-tooth"> </i> Odontologia </a>
                <a href="#"> <i class="fas fa-dna"> </i> Citologia </a>
                <a href="#"> <i class="fas fa-bolt"> </i> Eletrocardiograma </a>
                <a href="#"> <i class="fas fa-vial"> </i> Endoscopia </a>
            </div>

            <div class="box">
                <h3>Atendimento</h3>
                <a href="#"> <i class="fas fa-user-circle"> </i> (14) 99101-0101 </a>
                <a href="#"> <i class="fas fa-phone"> </i> (14) 3406-1010 </a>
                <a href="#"> <i class="fas fa-envelope"> </i> pet.archive@outlook.com </a>
                <a href="#"> <i class="fas fa-inbox"> </i> petarchive@sac.com </a>
                <a href="#"> <i class="fas fa-map-marker-alt"> </i> Garça, SP - 17400-000 </a>
            </div>

            <div class="box">
                <h3>Siga-nos</h3>
                <a href="#"> <i class="fab fa-facebook"> </i> Facebook </a>
                <a href="#"> <i class="fab fa-twitter"> </i> Twitter </a>
                <a href="#"> <i class="fab fa-instagram-square"> </i> Instagram </a>
                <a href="#"> <i class="fab fa-linkedin"> </i> Linkedin </a>
                <a href="#"> <i class="fab fa-pinterest"> </i> Pinterest </a>
            </div>

        </div>

        <div class="credit"> Desenvoldio por <span> Matheus </span> | Todos os direitos reservados © </div>

    </section>

    <!-- Final da seção de rodapé -->

    <!-- Documeto de customização do Javascript -->

    <script src="script.js"></script>
 
    

</body>

</html>
