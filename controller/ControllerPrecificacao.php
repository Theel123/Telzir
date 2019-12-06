
<?php
date_default_timezone_set('America/Sao_Paulo');


$origem = $_POST['origem'];
$destino = $_POST['destino'];
$porcentagem = 10.00;
$quantidadeMinutos = $_POST['minutos'];
$faleMaisSelecionado = $_POST['planoSelecionado'];



require_once('../models/ModelPrecificacao.php');
$precificacoes = new parametrosCalculados();

$precoMinuto = $precificacoes->verificaPrecoMinuto($origem,$destino);
$valorChamadaSemPlano = $precificacoes->calculaPrecoSemPlano($precoMinuto, $quantidadeMinutos);
$minutosExcedentes = $precificacoes->calculaMinutosExcedentes($faleMaisSelecionado, $quantidadeMinutos);
$valorChamadaComPlano = $precificacoes->calculaPrecoComPlano($precoMinuto, $minutosExcedentes, $porcentagem,$faleMaisSelecionado);




require_once('../models/ModelCrudChamadas.php');

$acoesCrud = new crudChamadas();
$acoesCrud->adicionarNovaChamada(
	$origem,
	$destino,
	$quantidadeMinutos,
	$valorChamadaComPlano,
	$valorChamadaSemPlano,
	$faleMaisSelecionado
);

header('Location: ../precificacao.php');



  if (!empty($_GET['id_chamada'])) {

 	$id = $_GET['id_chamada'];
 	$acoesCrud->deletarChamadas($id);
 	header('Location: ../precificacao.php');
 	
 } else {
 	
 	header('Location: ../precificacao.php');
 }
?>