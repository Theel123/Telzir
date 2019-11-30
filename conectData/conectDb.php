<?php

$db = "telzir";
$host = "localhost";
$userName = "root";
$password = "Pass@123";


 try 
 {
 	$conexao = new PDO('mysql:host=' = $host ,'dbname=' $db , $userName, $password);
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print('foi');

 }
 catch (PDOException $error)
 {
    echo 'ERROR: ' . $e->getMessage();	
 }

?>