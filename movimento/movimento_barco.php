<?php

include_once "../classes/conexao.php";

$nome                  = $_POST['nome'];
$proprietario          = $_POST['proprietario'];
$comprimento           = $_POST['comprimento'];
$capacidade            = $_POST['capacidade'];
$ano                   = $_POST['ano'];

try{    
$comando = $conexao->prepare('INSERT INTO barco (nome, proprietario, comprimento, capacidade, ano) 
VALUES(:nome, :proprietario, :comprimento, :capacidade, :ano)');
$comando->execute(array(
':nome'                  => $nome,
':proprietario'          => $proprietario,
':comprimento'           => $comprimento,
':capacidade'            => $capacidade,
':ano'                   => $ano
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