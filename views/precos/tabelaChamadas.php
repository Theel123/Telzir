

 <div class="row justify-content-center">
<div class="col-6">
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
          <a href="#" onclick="alertar()">[EDITAR]</a> 
          <a href="controller/ControllerPrecificacao.php?id_chamada=<?php print $item['id_chamada']; ?>">[DELETAR]</a> 
        </td> 
      </tr>
       <?php endforeach; ?> </td> </tr> </tbody> </table> 
</div>
</div>