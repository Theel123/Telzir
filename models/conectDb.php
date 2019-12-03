<?php
	
	 $dbtype   = "mysql";
	 $host     = "localhost";
	 $port     = "3306";
	 $user     = "root";
	 $password = "Pass@123";
 	 $db       = "telzir";

	try
	{
		$pdo = new PDO("mysql:host=localhost;dbname=telzir", "root", "Pass@123");
		print('conectado com sucesso'); 
		$sql = "SELECT * FROM telzir.precosFaleMais";
		$result = $pdo->query( $sql );
		$rows = $result->fetchAll();	 
		print('<pre>');
		print_r( $rows );
	}
	catch (PDOException $i)
	{
		//se houver exceção, exibe
		die("Erro: <code>" . $i->getMessage() . "</code>");
	}
		
	
