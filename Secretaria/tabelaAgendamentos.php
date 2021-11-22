<?php

require '../conexao.php';
require '../DAO/agendamentoDao.php';
require '../model/Agendamento.php';

$agendamento = new Agendamento();
$conexao = new Conexao();
$agendamentoDao = new AgendamentoDAO($conexao, $agendamento);

$agendamentos = $agendamentoDao->recuperarAgendamentos('', $_GET['dataSel']);
//print_r($agendamentos);

?>


<table class="table table-striped bg-primary">
    <thead class="table-dark">
        <tr>
            <th scope="col">Data</th>
            <th scope="col">Horario</th>
            <th scope="col">Dono</th>
            <th scope="col">Nome Pet</th>
            <th scope="col">Servico</th>
            <!--
            <th scope="col">Editar</th>
            <th scope="col">Excluir</th>
            -->
        </tr>
    </thead>
    <tbody>
    <?php
    foreach ($agendamentos as $indice => $dados) {
    ?>

        <tr>
        <td><?=$dados->data?></td>       
        <td><?=$dados->hora?></td>
        <td><?=$dados->dono?></td>
        <td><?=$dados->pet?></td>
        <td><?=$dados->servico?></td>

        <!--
        <td class="text-center"><i style="color:blue" class="fas fa-edit" onclick="editar('<?=$dados->name?>','<?=$dados->especie?>','<?=$dados->raca?>', '<?=$dados->porte?>','<?=$dados->nascimento?>',<?=$dados->id_pet?>)"></i></td>
        <td class="text-center"><i style="color:red" class="fas fa-trash-alt" onclick="excluir(<?=$dados->id_pet?>)"></i></td>
        -->
        </tr>

    <?php
    }
    ?>
    </tbody>
</table>