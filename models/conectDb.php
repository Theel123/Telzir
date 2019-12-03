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
	}
	catch (PDOException $i)
	{
		//se houver exceção, exibe
		die("Erro: <code>" . $i->getMessage() . "</code>");
	}
		
	
	
