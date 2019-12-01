<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/site.css">
    <title>Home</title>
</head>
<body>

	<?php require('views/layoutFixo/menu.html');?>
	
	<h1>Preços e Plano</h1>
	<p>Somos uma equipe especializada em precificacao em chamadas</p>
	
	<div class="row d-flex justify-content-center">
	
		<?php require('views/precos/tabelaPlanos.html');?>

    </div>

	<?php require('views/precos/formPrecificacao.html');?>  
    <?php require('views/layoutFixo/footer.html');?>

</body>
</html>

