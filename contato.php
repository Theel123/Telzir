<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/site.css">
    <link rel="stylesheet" href="css/contato.css">
     <link rel="shortcut icon" href="imagens/icone.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgOt9zEeHXLscZTkCdK4fQZG6mQvCXPJk&callback=initMap">
    </script>
    <script  type="text/javascript" >
		 function initMap() {
			  var edificio = {lat: -23.545432, lng: -46.643594};
			  var map = new google.maps.Map(
			      document.getElementById('map'), {zoom: 18, center: edificio});
			  var marker = new google.maps.Marker({position: edificio, map: map});
		}	  
    </script>

    <title>Home</title>
</head>
<body>

<div id="container-fluid">
	<?php require('views/layoutFixo/menu.html');?>
</div>

 <div class="container">
    <div class="row justify-content-center">
    	<h3>Estamos localizados em</h3>
    	<br>
  		<div id="map" style="width:80%;height:400px"></div>
    </div>
</div>
<br>

  <div class="container">
    <div class="row justify-content-center">
      <h1>Entre em Contato</h1>
      <p>Sugira melhorias, novos planos ou dedique suas sugestões e criticas</p>
  </div>
</div>


<div class="row d-flex justify-content-center">
	<?php require('views/contato/contato.html'); ?>
</div>


<div id="container-fluid">
	<?php require('views/layoutFixo/footer.html'); ?>
</div>

</body>
</html>

