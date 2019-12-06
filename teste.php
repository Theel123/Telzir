<?php
date_default_timezone_set('America/Sao_Paulo');
/*
Class planoFaleMais {
    private $origem;
    private $destino;
    private $preco;
 
    public function __construct($origem,$destino,$preco)
     {
        $this->destino = $destino;
        $this->origem = $origem;
        $this->preco = $preco;  
     }
     public function calculaPrecoChamada($origem,$destino,) {
 
     }
}
 
Class planoFaleMais30 extends planoFaleMais{
 
}
Class planoFaleMais60 extends planoFaleMais{
 
}
Class planoFaleMais120 extends planoFaleMais{
 
}
 
*/
 // Aqui serao todos Post

$origem = 0.11;
$destino = 0.16;
$precoMin = 1.70;
$porcentagem = 10.00;
$quantidadeMinutos = 80;

//Constantes Definidas 

$faleMais30  = 30;
$faleMais60  = 60;
$faleMais120 = 120;
 
 
function calculaPrecoChamada($origem, $destino, $precoMin, $quantidadeMinutos, $porcentagem, $plano) {
 
    print('voce optou pelo plano Fale Mais '.$plano.' por isso tem '.$plano.' minutos em chamadas gratuitas'.'<br>');

    $precoChamadaSemPlano = $precoMin * $quantidadeMinutos;
    print('o preco em reais sem o plano fica '.abs($precoChamadaSemPlano).'<br>'); 

    $minutosExcedentes = $quantidadeMinutos-$plano;
    print('Minutos Excedentes '.abs($minutosExcedentes).'<br>');
    
    $precoMinMais10P = $precoMin  + ($porcentagem * $precoMin);
    print($precoMinMais10P);
    
    $precoChamadaComPlano = $precoMinMais10P * ($minutosExcedentes);
    $valorMinutosExcedentes = $precoChamadaComPlano;
    print('o preco em reais com o plano fica '.abs($valorMinutosExcedentes).'<br>');  

}


 
if(isset($origem))
 {
    print('sua origem eh '.$origem.' seu destino '.$destino.'<br>');
 } 
        
        if (isset($faleMais30)) {
 
            calculaPrecoChamada($precoMin, $quantidadeMinutos,$porcentagem,$faleMais120);
 
        } else if (isset($faleMais60)) {
 
            calculaPrecoChamada($precoMin, $quantidadeMinutos,$faleMais60);
 
        } else if (isset($faleMais120)) {
            
            calculaPrecoChamada($precoMin, $quantidadeMinutos,$faleMais120);
 
        } else {
            print('selecione um plano ou selecione a opcao da simulacao sem plano');
     }
        ?>
        

<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>AJAX, JSON E PHP</title>
        	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        	<script src="ajax.js"></script>
	</head>
	<body>
		<table border="1" width="500">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>Origem</th>
		            <th>Destino</th>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
		        </tr>
         
                    <td><?php print($precoMin)?></td>
                    <td><?php print($precoMin)?></td>  
                    <td><?php print($precoMin)?></td>
                    <td><?php print($precoMin)?></td>
                    <td><?php print($precoMin)?></td>
                    <td><?php print($precoMin)?></td>
            
		    </thead>
		    <tbody id="tabela">
		    </tbody>
		</table>
	</body>
</html>