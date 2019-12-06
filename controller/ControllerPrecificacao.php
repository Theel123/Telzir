
<?php
date_default_timezone_set('America/Sao_Paulo');


$origem = $_POST['origem'];
$destino = $_POST['destino'];
//$precoMinuto = $_POST['precoMinuto'];
$porcentagem = 10.00;
$quantidadeMinutos = $_POST['minutos'];
$faleMaisSelecionado = $_POST['planoSelecionado'];
$precoChamadaComPlano = 10;
$precoChamadaSemPlano = 10;

require_once('../models/ModelPrecificacao.php');
$precificacoes = new parametrosCalculados();
$precificacoes->calculaPrecoChamada($precoMin, $quantidadeMinutos, $porcentagem,$plano);

//Manipulando os dados de entrada antes de inserir no banco

//Aqui manipulo o banco
require_once('../models/ModelCrudChamadas.php');

$acoesCrud = new crudChamadas();
$acoesCrud->adicionarNovaChamada($origem,$destino,$precoChamadaComPlano,$precoChamadaSemPlano,$faleMaisSelecionado);
header('Location: ../precificacao.php');



  if (!empty($_GET['id_chamada'])) {

 	$id = $_GET['id_chamada'];
 	$acoesCrud->deletarChamadas($id);
 	header('Location: ../precificacao.php');
 	
 } else {
 	
 	header('Location: ../precificacao.php');
 }
?>