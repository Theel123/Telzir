<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/contato.css">
    <title>Home</title>
</head>
<body>

<?php require('views/layoutFixo/menu.html');?>

<h1>Entre em contato conosco</h1>
<p>Somos uma equipe especializada em precificacao em chamadas</p>

	<div class="row d-flex justify-content-center">
		<?php require('views/contato/contato.html'); ?>
    </div>

<?php require('views/layoutFixo/footer.html'); ?>
</body>
</html>

