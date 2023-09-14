<?php

include_once "../classes/conexao.php";

$usuario       = $_POST['usuario'];
$senha         = $_POST['senha'];

try{    
$coman1do = $conexao->prepare('INSERT INTO usuario (usuario, senha) 
VALUES (:usuario, :senha)');
$comando->execute(array(
':usuario'          => $usuario,
':senha'            => $senha
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