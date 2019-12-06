<?php
 	 class conexaoMysql {

 	 	 public function __construct() {}

	 	 private static $dbtype   = "mysql";
		 private static $host     = "localhost";
		 private static $port     = "3306";
		 private static $user     = "root";
	     private static $password = "password";
	 	 private static $db       = "telzir";


	    private function getDBType()  {return self::$dbtype;}
	    private function getHost()    {return self::$host;}
	    private function getPort()    {return self::$port;}
	    private function getUser()    {return self::$user;}
	    private function getPassword(){return self::$password;}
	    private function getDB()      {return self::$db;}

 		private function connect(){
	        try
	        {
	            $this->conexao = new PDO($this->getDBType().":host=".$this->getHost().";port=".$this->getPort().";dbname=".$this->getDB(), $this->getUser(), $this->getPassword());
	        }

	        catch (PDOException $i)
	        {
	           throw new PDOException($e);
	        }
		}
	}	
		
	
	
