<?php 

$host = 'mysql:host=localhost;dbname=esocialu_paratytur';
$user = "esocialu_dev";
$senha = "#paraty556762";

<<<<<<< Updated upstream
	$host = 'mysql:host=localhost;dbname=';
	$user = "if0_35026416";
	$senha = "#paraty556762";
	
=======
>>>>>>> Stashed changes
try{
	$conexao = new PDO($host,$user,$senha);
}catch(PDOException $e){
	print_r($e);
}

?>