<?php


 class parametrosCalculados {

	private $origem;
	private $porcentagem;
	private $destino;
	private $plano;
	private $minutos;
	private $precoMinuto;
	private $conexao;
	private $valorMinutoCalculado;

	public function __construct() {
		$this->conexao = new PDO("mysql:host=localhost;dbname=telzir","root","Pass@123");
	}
	
	 public function buscarOrigemDestino() 
	 {
		$sql = "SELECT origem FROM origemdestino GROUP BY origem";
		$result = $this->conexao->query($sql);
		if($result->rowCount()>0) {

			return $result->fetchAll();

		 } else {

			return array();
		 }
	}

	public function buscarDestinoBaseadoNaOrigem() 
	{
		$sql = "SELECT destino FROM origemdestino"; 
		$result = $this->conexao->query($sql);
		if($result->rowCount()>0) {

			return $result->fetchAll();

		 } else {

			return array();
		 }
	}

	  
	 public	function calculaPrecoChamada($precoMin, $quantidadeMinutos, $porcentagem,$plano)
	 {
		 

	    $precoChamadaSemPlano = $precoMin * $quantidadeMinutos;

	    $minutosExcedentes = $quantidadeMinutos-$plano;
	    
	    $precoMinMais10P = $precoMin  + ($porcentagem * $precoMin);
	    
	    $precoChamadaComPlano = $precoMinMais10P * ($minutosExcedentes);
	    $valorMinutosExcedentes = $precoChamadaComPlano;

	 }

}


?>