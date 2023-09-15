<?php

include_once "../classes/conexao.php";

$nome_responsavel    = $_POST['nome_responsavel'];
$nome_fantasia       = $_POST['nome_fantasia'];
$cnpj                = $_POST['cnpj'];
$email               = $_POST['email'];
$telefone            = $_POST['telefone'];
$rua                 = $_POST['rua'];
$bairro              = $_POST['bairro'];
$cidade              = $_POST['cidade'];
$estado              = $_POST['estado'];
$credito             = $_POST['credito'];


try{    
$comando = $conexao->prepare('INSERT INTO pousada (nome_responsavel, nome_fantasia, cnpj, email, telefone, rua, bairro, cidade, estado, credito ) 
VALUES(:nome_responsavel, :nome_fantasia, :cnpj, :email, :telefone, :rua, :bairro, :cidade, :estado, :credito)');
$comando->execute(array(
':nome_responsavel'        => $nome_responsavel,
':nome_fantasia'           => $nome_fantasia,
':cnpj'                    => $cnpj,
':email'                   => $email,
':telefone'                => $telefone,
':rua'                     => $rua,
':bairro'                  => $bairro,
':cidade'                  => $cidade,
'estado'                   => $estado,
':credito'                 => $credito
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