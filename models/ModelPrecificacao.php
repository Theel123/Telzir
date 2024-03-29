<?php

 class parametrosCalculados {

	public  $origem;
	public  $porcentagem;
	public  $destino;
	public  $plano;
	public  $quantidadeMinutos;
	public  $precoMinuto;
	private $conexao;
	public  $valorMinutoCalculado;

	public function __construct() 
	{
		$this->conexao = new PDO("mysql:host=localhost;dbname=telzir","root","Pass@123");
	}

	public function buscarInformacoes ($id)
	{
		$sql = "SELECT * FROM telzir.chamadas WHERE id_chamada = :id";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':id',$id);
		$result->execute();

			if($result->rowCount()>0){

				return $result->fetch();

			} else {

				return array();
			}
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
		$sql = "SELECT destino FROM origemdestino GROUP BY destino"; 
		$result = $this->conexao->query($sql);
		if($result->rowCount()>0) {

			return $result->fetchAll();

		 } else {

			return array();
		 }
	}

	public function verificaPrecoMinuto($origem,$destino) 
	{
		
		$sql = "SELECT precoMinuto FROM origemdestino WHERE origem = :origem AND destino = :destino";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':origem', $origem);
		$result->bindValue(':destino', $destino);
		$result->execute();

		if($result->rowCount()>0) {

			$info = $result->fetch();
			return $info['precoMinuto'];

			} else {

				return'';
			}
	}


	public function calculaMinutosExcedentes($plano,$quantidadeMinutos)
	{
		 $this->plano = $plano;
		 $this->quantidadeMinutos = $quantidadeMinutos;

		 $minutosExcedentes = $this->plano - $this->quantidadeMinutos;
	 	 $retorno = 'cobre';
	 	 if ($minutosExcedentes < 0){

	 	    	return abs($minutosExcedentes);

	 	  } else {

	 		return($retorno);
	 	  }	 
	}



	public function calculaPrecoSemPlano($precoMinuto,$quantidadeMinutos)
	{
		$this->precoMinuto = $precoMinuto;
		$this->quantidadeMinutos = $quantidadeMinutos;

		return $precoChamadaSemPlano =  $this->precoMinuto * $this->quantidadeMinutos;

	}


	public function calculaPorcentagem($precoMinuto, $porcentagem) 
	{
		$this->precoMinuto = $precoMinuto;
		$this->porcentagem = $porcentagem;

		$precoMinutoAcrescidoDezPorcento = $precoMinuto + ($precoMinuto  / 100 * $porcentagem);

		return $precoMinutoAcrescidoDezPorcento;

	}

	public function calculaPrecoComPlano ($precoMinuto,$quantidadeMinutos) 
	{
		
		$this->quantidadeMinutos = $quantidadeMinutos;
		$this->precoMinuto =$precoMinuto;
		


		$precoChamadaComPlano = ($precoMinuto * $quantidadeMinutos);
		return $precoChamadaComPlano;
	}



}


?>