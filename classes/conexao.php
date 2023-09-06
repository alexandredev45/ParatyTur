<?php
	$host = "mysql:host=;dbname=";
	$user = "";
	$senha = "";
	
try{
	$conexao = new PDO($host,$user,$senha);
	$query = "delete from usuarios where cod= 4";
$conexao->query($query);
	
}
catch(PDOException $e){
	print_r($e);
}

?>

