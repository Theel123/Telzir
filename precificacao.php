<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="css/tabelas.css">
    <title>Planos</title>
</head>
<body>

	<?php require('views/layoutFixo/menu.html');?>

	<h1>Preços e Plano</h1>
	<p>Somos uma equipe especializada em precificacao em chamadas</p>
	<h2>Selecione seu Plano</h2>
	<br>
	<br>
	
	<div class="row d-flex justify-content-center">
		<?php require('views/precos/tabelaPlanos.php');?>
    </div>
   <h3>Faça uma Simulação</h3>
   <br>
   <br>


	<?php require('views/precos/tabelaSimulacao.php');?>  
    <?php require('views/layoutFixo/footer.html');?>

</body>
</html>

