<?php
    include_once("../classes/conexao.php");

    $nome          = $_POST['nome'];
    $valor         = $_POST['valor'];
    $quantidade    = $_POST['quantidade'];
    $obs       = $_POST['obs'];

try{    
    $comando = $conexao->prepare('INSERT INTO produto(nome, valor, quantidade, obs) VALUES(:nome, :valor, :quantidade, :obs)');
    $comando->execute(array(
    ':nome'         => $nome,
    ':valor'        => $valor,
    ':quantidade'   => $quantidade,
    ':obs'          => $obs,
  ));

   
}catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}

$cont = $comando->rowCount();

   if($cont == 1)
     {
      //header("Location:cadastro_produto.html");
      echo 'Alert(Produto Cadastrado Com Sucesso !!!);'; //colocar alert no  js
     }else{
      echo 'Alert(Erro em tentar registrar cadastro!!);';
     } 
?>