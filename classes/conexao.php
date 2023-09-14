<?php 

$host = 'mysql:host=ns950.hostgator.com.br;dbname=esocialu_paratytur';
$user = "esocialu_dev";
$senha = "Hi~g$1X3#u6F";
	
try{
	$conexao = new PDO($host,$user,$senha);
}catch(PDOException $e){
	print_r($e);
}

?>