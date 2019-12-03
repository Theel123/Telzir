<?php

Class planoFaleMais {

	private $conexao;

	public function __construct() {
		$this->conexao = new PDO("mysql:host=localhost;dbname=telzir","root","Pass@123");
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

		$sql = "SELECT * FROM telzir.precosFaleMais";
		$result = $pdo->query( $sql );
		$rows = $result->fetchAll();	 
		print('<pre>');
		print_r( $rows );

	
	}

	
}

?>