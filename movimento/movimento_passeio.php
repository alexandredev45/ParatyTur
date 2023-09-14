<?php

include_once "../classes/conexao.php";

$nome               = $_POST['nome'];
$partida            = $_POST['partida'];
$duracao            = $_POST['duracao'];
$valor              = $_POST['valor'];
$descricao          = $_POST['descricao'];

try{    
$comando = $conexao->prepare('INSERT INTO passeio (nome, partida, duracao, valor, descricao) 
VALUES(:nome, :partida :duracao, :valor, :descricao)');
$comando->execute(array(
':nome'             => $nome,
':partida'          => $partida,
':duracao'          => $duracao,
':valor'            => $valor,
':descricao'        => $descricao
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


//select

//update

//delete


?>