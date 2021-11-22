
<?php
session_start();

if(empty($_SESSION['email'])){
    echo "<script> window.alert('Usuário e senha não cadastrado!')
            window.location.href = 'index.php'
          </script>";
  }

require '../conexao.php';
require '../DAO/agendamentoDao.php';
require '../model/Agendamento.php';

$agendamento = new Agendamento();
$conexao = new Conexao();
$agendamentoDao = new AgendamentoDAO($conexao, $agendamento);

date_default_timezone_set("America/Sao_Paulo");

$data = explode('-', $_GET['dataSel']);

//print_r($data);

$anoSel = $data[0];
$mesSel = $data[1];
$dias = cal_days_in_month(CAL_GREGORIAN, $mesSel, $anoSel);
if($mesSel == date("m")){
    $d = date("d");
    $d++;
}else{
    $d=1;
}
for(; $d<=$dias; $d++){

    $meses = array (1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 => "Dezembro");
    $diasdasemana = array (1 => "Segunda-Feira",2 => "Terça-Feira",3 => "Quarta-Feira",4 => "Quinta-Feira",5 => "Sexta-Feira",6 => "Sábado",0 => "Domingo");

    //$dia = str_replace('/','-',$dia);
    $d = ($d<10) ? '0'.$d : $d;
    $dia = $d.'-'.$mesSel.'-'.$anoSel;
    $dataSelecionada = $anoSel.'-'.$mesSel.'-'.$d;


    //print_r($dia);

    $hoje = getdate(strtotime($dia));

    $dia = $hoje["mday"];
    $mes = $hoje["mon"];
    $nomemes = $meses[$mes];
    $ano = $hoje["year"];
    $diadasemana = $hoje["wday"];
    $nomediadasemana = $diasdasemana[$diadasemana];
    //print_r($dia);
    //$agendamentos = $agendamentoDao->recuperarAgendamento($dataSelecionada, '', '', '');
    if($nomediadasemana != 'Sábado' AND $nomediadasemana != 'Domingo'){
        $j=0;
        $agendamentos = $agendamentoDao->recuperarAgendamentos("", $dataSelecionada);
        //print_r($agendamentos);
    ?>
        <div class="row mt-3 mb-1">
            <div class="col d-flex justify-content-center">
                <h5 class="mt-0 mb-0"><b><?php echo "$nomediadasemana, $dia de $nomemes de $ano"; ?></b></h5>
            </div>
        </div>
        <div class="row">
        <div class="col d-flex justify-content-center">
        <tr class="d-flex justify-content-around">
        <?php
        for($i=8, $j=0 ;$i <= 17 ; $i++){
            $horaSel = ($i < 10) ? '0'.$i.':00:00' : $i.':00:00';
            $hora = isset($agendamentos[$j]->hora) ? $agendamentos[$j]->hora : '24:00:00';
            if($hora == $horaSel){
                $j++;
            }else{
        ?>
            <div class="m-2"><a href="cadastrarAgendamentoCompleto.php?data=<?=$dataSelecionada?>&hora=<?=$horaSel?>"><?=$horaSel?></a></div>
        <?php  
            }
        }
        ?>
        </tr>
        </div>
        </div>
<?php
    }
}
?>