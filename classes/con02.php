<?php

	$host = 'mysql:host=localhost;dbname=';
	$user = "if0_35026416";
	$senha = "vKnh76PQ7WtjAi";
	
try{
	$conexao = new PDO($host,$user,$senha);
    $conexao->query($query);
	
}
catch(PDOException $e){
	print_r($e);
}

?>