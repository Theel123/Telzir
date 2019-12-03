
<?php
require('../../models/precificacao.php');
require('../../models/conectDb.php.php');
$OrigemDestino = new planoFaleMais();


?>
<table id="tabelasOD" class="tabelaOD" border="1">
   <thead>
   <tr>
       <th>Origem</th>
       <th>Destino</th>
       <th>$/Min</th>
   </tr>
   </thead>
   <tbody>

<?php
$lista = $OrigemDestino->getAll(); 
foreach ($lista as $item):
?> 
<tr>
     <td><?php print $item['origem']?></td>
     <td><?php print $item['destino']?> </td>
     <td><?php print $item['precoMinuto']?> </td>
</tr>
<?php endforeach; ?>

</table>