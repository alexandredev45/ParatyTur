<?php

	$host = 'mysql:host=localhost;dbname=';
	$user = "if0_35026416";
	$senha = "#paraty556762";
	
try{
	$conexao = new PDO($host,$user,$senha);
    $conexao->query($query);
	
}
catch(PDOException $e){
	print_r($e);
}

?>