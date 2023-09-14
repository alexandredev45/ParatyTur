<?php

include_once "../classes/conexao.php";

$nome               = $_POST['nome'];
$local_             = $_POST['local_'];
$duracao            = $_POST['duracao'];
$valor              = $_POST['valor'];
$descricao          = $_POST['descricao'];

try{    
$comando = $conexao->prepare('INSERT INTO produto (nome, local_, duracao, valor, descricao) 
VALUES(:nome, :local_ :duracao, :valor, :descricao)');
$comando->execute(array(
':nome'             => $nome,
':local_'           => $valor,
':duracao'          => $quantidade,
':valor'            => $obs,
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


?>