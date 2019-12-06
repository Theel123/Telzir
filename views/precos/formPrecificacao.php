<?php
  require_once('models/ModelPrecificacao.php');
  $precificacoes = new parametrosCalculados();
?>

<?php
  require_once('models/ModelCrudChamadas.php');
  $chamada = new crudChamadas();
/*
    if(!empty($_GET['id_chamada'])){
    $id = $_GET['id_chamada']; 
    $info = $chamada->getInfo($id); } ?> 
*/
?>
<html>

<head>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/formulario.js" type="text/javascript"></script>
    <script  type="text/javascript">
      var origem = "<?php print $origem;?>";
    </script>
</head>

<body>
 <div class="form-row">
    <div class="form-group col-md-6">

      <form method="post" action="controller/ControllerPrecificacao.php">
         <td> 
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="planoSelecionado" id="planoSelecionado" value="30">
              <label class="form-check-label" for="inlineRadio1">Fale Mais 30</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="planoSelecionado" id="planoSelecionado" value="60">
              <label class="form-check-label" for="inlineRadio2">Fale Mais 60</label>
            </div>

            <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="planoSelecionado" id="planoSelecionado" value="120" >
              <label class="form-check-label" for="inlineRadio3">Fale Mais 120</label>
         </div>
             
        </td>

  <!---Origem---> 
   <label for="exampleFormControlSelect1">Selecione sua Origem</label>  
      <div class="form-group">
        <select class="form-control " searchable="Search here.." id="origem" name="origem"  >
          <option value="" disabled selected>Selecione </option>
          <?php
                  $origem =  $precificacoes->buscarOrigemDestino();
                  foreach ($origem as $item):?>
                  <option value="<?php print $item['origem'];?> "><?php print $item['origem'];?></option>
          <?php endforeach;?>
        </select>
      </div>

    <!---Destino---> 
   <label for="exampleFormControlSelect1">Selecione seu Destino</label>  
      <div class="form-group">
        <select class="form-control" searchable="Search here.." id="destino" name="destino">
          <option value="" disabled selected>Selecione </option>
          <?php
                  $destino =  $precificacoes->buscarDestinoBaseadoNaOrigem();
                  foreach ($destino as $item):?>
                  <option value="<?php print $item['destino'];?> "><?php print $item['destino'];?></option>
          <?php endforeach;?>
    </select>
  </div>

        <div class="form-group">
          <label for="usr">Minutos que deseja falar:</label>
          <input type="text" class="form-control" id="minutos" name="minutos" onkeypress="return onlynumber();">
        </div>

        <div class="form-group">
          <button type="submit" class="btn btn-success">Success</button>
        </div>

   </form>

</div>
</div>
</div>


<div class="row justify-content-right">
<div class="col-3">
  <table class="table table-bordered">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Origem</th>
      <th scope="col">Destino</th>
      <th scope="col">Tempo</th>
      <th scope="col">Plano FaleMais</th>
      <th scope="col">Com FaleMais</th>
      <th scope="col">Sem FaleMais</th>
      <th scope="col">Ações</th>

  </thead>

   <tbody> 
    <?php $lista = $chamada->buscarChamadas();
     foreach ($lista as $item): ?> <tr>

      <td><?php print $item['id_chamada']?> </td> 
      <td><?php print $item['origem']?></td> 
      <td><?php print $item['destino']?> </td>
      <td><?php print $item['quantidadeMinutos']?> </td>
      <td><?php print  'Fale Mais '.$item['planoSolicitado']?> </td> 
      <td><?php print '$'.$item['precoMinutoComPlano']?> </td> 
      <td><?php print '$'.$item['precoMinutoSemPlano']?> </td>

      <td>
          <a href="editar_livroC.php?id_livro=<?php print $item['id_chamada']; ?>">[EDITAR]</a> 
          <a href="controller/ControllerPrecificacao.php?id_chamada=<?php print $item['id_chamada']; ?>">[DELETAR]</a> 
        </td> 
      </tr>
       <?php endforeach; ?> </td> </tr> </tbody> </table> 
</div>
</div>

</body>
</html>