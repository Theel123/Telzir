
  <table class="table table-bordered">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Origem</th>
      <th scope="col">Destino</th>
      <th scope="col">Tempo</th>
      <th scope="col">Plano FaleMais</th>
      <th scope="col">Com FaleMais</th>
      <th scope="col">Sem FaleMais</th>

    </tr>
  </thead>
  <tbody>

  <?php
    $lista = $precos->getAll(); 

    foreach ($lista as $item):
  ?> 
    <tr>
         <td><?php print $item['id']?> </td>
         <td><?php print $item['origem']?></td>
         <td><?php print $item['destino']?> </td>
         <td><?php print $item['preco']?> </td>
         <td> 

            <a href="editar_clienteC.php?id_cliente=<?php print $item['id_cliente']; ?>">[EDITAR]</a>
            <a href="cadastro_cliente.php?id_cliente=<?php print $item['id_cliente']; ?>">[DELETAR]</a>
        </td>
    </tr>
<?php endforeach; ?> 

  </tbody>
</table>