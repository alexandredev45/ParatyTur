<?php

include_once "../classes/conexao.php";

$nome_fantasia    = $_POST['nome_fantasia'];
$dt               = $_POST['dt'];
$horario          = $_POST['horario'];
$tempo            = $_POST['tempo'];
$barco            = $_POST['barco'];

try{    
$comando = $conexao->prepare('INSERT INTO agenda (nome_fantasia, dt, horario, tempo, barco) 
VALUES(:nome_fantasia, :dt, :horario, :tempo, :barco)');
$comando->execute(array(
':nome_fantasia'        => $nome_fantasia,
':dt'                   => $dt,
':horario'              => $horario,
':tempo'                => $tempo,
':barco'                => $barco
));
}

catch(PDOException $e) {
echo 'Error: ' . $e->getMessage();
}

$cont = $comando->rowCount();

if($cont == 1){
  //header("Location:cadastro_produto.html");
  echo '<script>Alert(Cliente Cadastrado Com Sucesso !!!);</script>'; //colocar alert no  js
 }else{
  echo '<script>Alert(Erro em tentar registrar cadastro!!!);</script>';
}

?>