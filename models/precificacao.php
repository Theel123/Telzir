<?php

Class planoFaleMais {

	private $conexao;

	public function __construct()
	{
		$this->conexao = $conexao;
	}

	public function adicionar($nome,$sobrenome)
	{

		if($this->existeNome($nome) == false){

			$sql    = "INSERT INTO biblioteca.autor (autor_nome,autor_sobrenome) VALUES (:nome,:sobrenome)";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':nome', $nome);
			$result->bindValue(':sobrenome', $sobrenome);
			$result->execute();
			return true;

		  }else{

			return false;
		}
	}

	public function getNome($sobrenome)
	 {

		$sql = "SELECT autor_nome FROM biblioteca.autor WHERE autor_sobrenome = :sobrenome";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':sobrenome', $sobrenome);
		$result->execute();

		if($result->rowCount()>0) {
			$info = $result->fetch();
			return $info['autor_nome'];
		} else {
			return'';
		}
	}

	public function getInfo ($id)
	 {
		$sql = "SELECT * FROM telzir.precoFaleMais WHERE id = :id";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':id',$id);
		$result->execute();
		
			if($result->rowCount()>0){
				return $result->fetch();
			} else {
				return array();
			}
	 }

	public function getAll() 
	{
		$sql = "SELECT * FROM telzir.precoFaleMais";
		$result = $this->conexao->query($sql);

		if($result->rowCount()>0) {
			return $result->fetchAll();
		} else {
			return array();
		}
	}

	public function editar($nome,$sobrenome,$id)
	{
		if($this->existeNome($nome) == false) {
			
			$sql = "UPDATE biblioteca.autor SET autor_nome = :nome, autor_sobrenome = :sobrenome where id_autor = :id";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':nome', $nome);
			$result->bindValue(':sobrenome',$sobrenome);
			$result->bindValue(':id', $id);
			$result->execute();
			return true;
		} else {
			return false;
		}
	}

	public function excluir($id)
	 {
			$sql = "DELETE FROM biblioteca.autor WHERE id_autor = :id";
			$result = $this->conexao->prepare($sql);
			$result->bindValue(':id', $id);
			$result->execute();
	 }

	private function existeNome($nome)
	{
		$sql = "SELECT * FROM biblioteca.autor WHERE autor_nome = :nome";
		$result = $this->conexao->prepare($sql);
		$result->bindValue(':nome',$nome);
		$result->execute();
		if($result->rowCount() >0) {
			return true;
		} else {
			return false;
		}
	}
	
}

Class faleMais30 extends planoFaleMais {

}

Class faleMais60 extends planoFaleMais {

}

Class faleMais120 extends planoFaleMais {

}
?>