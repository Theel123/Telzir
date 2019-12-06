pa<?php

//Includes
//


class crudChamadas {

	private $conexao;

	public function __construct() 
	{
		$this->conexao = new PDO("mysql:host=localhost;dbname=telzir","root","Pass@123");
	}

	public function adicionarNovaChamada($origem,$destino,$precoMinutoComPlano,$precoMinutoSemPlano,$planoSolicitado)
	{

			$sql  = "
			INSERT INTO chamadas
			(	
				
				 origem,
				 destino,
				 precoMinutoComPlano,
				 precoMinutoSemPlano,
				 planoSolicitado
			)
			 VALUES
			(	
			   
				:origem,
				:destino,
				:precoMinutoComPlano,
				:precoMinutoSemPlano,
				:planoSolicitado
		    )";

			$result = $this->conexao->prepare($sql);
			$result->bindValue(':origem', $origem);
			$result->bindValue(':destino', $destino);
			$result->bindValue(':precoMinutoComPlano', $precoMinutoComPlano);
			$result->bindValue(':precoMinutoSemPlano', $precoMinutoSemPlano);
			$result->bindValue(':planoSolicitado', $planoSolicitado);
			$result->execute();

	}

	public function buscarChamadas() 
	{
		$sql = "
		SELECT 
			*
				FROM telzir.chamadas
			
			  ";
		$result = $this->conexao->query($sql);

		if($result->rowCount()>0) {

			return $result->fetchAll();

		} else {

			return array();
		}
	}

	public function editarChamadas($origem,$destino,$precoChamadaComPlano,$precoMinutoSemPlano,$planoSolicitado)
	{
		if($this->existeChamada($nome)== false) {
				
			$sql = "
				UPDATE telzir.chamadas
				  SET 
				  origem = :origem,
				  destino = :destino,
				  precoChamadaComPlano= :precoMinutoComPlano,
				  precoMinutoSemPlano = :precoMinutoSemPlano,
				  planoSolicitado = :planoSolicitado, 
				  WHERE id_chamada = :id
			    ";

			$result = $this->conexao->prepare($sql);
			$result->bindValue(':origem', $origem);
			$result->bindValue(':destino', $destino);
			$result->bindValue(':precoMinutoComPlano', $precoMinutoComPlano);
			$result->bindValue(':precoMinutoSemPlano', $precoMinutoSemPlano);
			$result->bindValue(':planoSolicitado', $planoSolicitado);
			$result->bindValue(':id', $id);
			$result->execute();
			return true;

		} else {

			return false;
		}
	}

	public function deletarChamadas($id) 
	{

		$sql = "DELETE FROM telzir.chamadas WHERE id_chamada = :id";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':id', $id);
		$result->execute();
	}

	private function existeChamada($id)
	{

		$sql = "SELECT * FROM telzir.chamadas WHERE id_chamada = :id";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':id',$id);
		$result->execute();

		if($result->rowCount()>0) {

			return true;

		} else {

			return false;
		}
	}
}
