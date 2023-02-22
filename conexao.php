<?php

$servidor = "localhost";
$bd = "buscapets";
$userBD ="root" ;
$passBD = "";

try
{
	$conn = new PDO("mysql:dbname=$bd;host=$servidor",$userBD,$passBD);
	
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	$conn->exec("set names utf8");
	
}
catch(PDOException $ex)
{
	echo "ERRO: ". $ex->getMessage();
}


?>