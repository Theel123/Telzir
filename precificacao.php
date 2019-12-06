<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <link rel="stylesheet" type="text/css" href="css/tabelas.css">
     <link rel="stylesheet" href="css/site.css">
         <link rel="shortcut icon" href="imagens/icone.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <title>Planos</title>
</head>
<body>
	<?php require('views/layoutFixo/menu.html');?>

  <div class="container">
    <div class="row justify-content-center">
      <h1>Preços e Planos</h1>
      <p>Abaixo segue nossa divisão de planos, escolha o que melhor te atender</p>
  </div>
  <blockquote>
    <p>No momento temos poucas opções disponiveis de Origem/Destino e conforme a escolha da origem o destino será alterado dinamicamente para que não ocorra conflitos</p>
  </blockquote>
</div>
<br>
<br>

	<div class="row d-flex justify-content-center">
		
	   <h3>Faça uma Simulação</h3>
	   <br>
	   <br>
	</div>
   </div>
  
	
    <?php require('views/precos/formPrecificacao.php');?>
    <?php require('views/layoutFixo/footer.html');?>

<script src="js/jquery-3.4.1.min.js" type="text/javascript" ></script>
	<script src="js/bootstrap.bundle.min.js" type="text/javascript" ></script>
</body>
</html>

