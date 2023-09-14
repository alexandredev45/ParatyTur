<?php

include_once "../classes/conexao.php";

$nome                  = $_POST['nome'];
$valor                 = $_POST['valor'];
$quantidade            = $_POST['quantidade'];
$obs                   = $_POST['obs'];

try{    
$comando = $conexao->prepare('INSERT INTO produto (nome, valor, quantidade, obs) 
VALUES(:nome, :valor, :quantidade, :obs)');
$comando->execute(array(
':nome'                  => $nome,
':valor'                 => $valor,
':quantidade'            => $quantidade,
':obs'                   => $obs,
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



































/*
include_once("../classes/conexao.php");

    // VERIFICAR conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
  $nome = $_POST['nome'];
  $valor = $_POST['valor'];
  $quantidade = $_POST['quantidade'];
  $obs = $_POST['obs'];

  // CADASTRAR novo produto
  $mysql = "INSERT INTO `produto` (`nome`, `valor`, `quantidade`, `obs`) VALUES ('$nome', '$valor', '$quantidade', '$duracao')";

  if ($conexao->query($mysql) === TRUE) {
      echo "Seu produto foi registrado com sucesso.";
      exit();
  } else {
      echo "Ocorreu um erro ao registrar produto, por favor, verifique os valores inseridos e tente novamente." . $conexao->error;
  }
}

// EXIBIR lista de produto para EDIÇÃO e EXCLUSÃO

if (isset($_GET['editar'])){
  $id_produto = $_GET['editar'];

  $mysql = "SELECT * FROM `produto` WHERE `id_produto` = $id_produto";
  $resultado = $conexao->query($mysql);

  if ($resultado->num_rows > 0) {
      echo "<table>";
      echo "<tr><th>ID</th><th>Usuário</th><th>Senha</th></tr>";
      
      while ($linha = $resultado->fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $linha['id_produto'] . "</td>";
          echo "<td>" . $linha['nome'] . "</td>";
          echo "<td>" . $linha['valor'] . "</td>";
          echo "<td>" . $linha['quantidade'] . "</td>";
          echo "<td>" . $linha['obs'] . "</td>";
          echo "<td>< a href='?editar=" . $linha['id_produto'] . "'>Editar</a> | <a href='?excluir=" . $linha['id_uproduto'] . "'>Excluir</td>";
          echo "</tr>";
      }
      echo "</table>";

  }
} elseif (isset($_GET['excluir'])) { 
  $id_produto = $_GET['excluir'];

  $mysql = "DELETE FROM `produto` WHERE `id_produto` = $id_produto";

  if ($conexao->query($mysql) === TRUE) {
      echo "Produto excluído com sucesso.";
      exit();
  } else {
      echo "Erro ao excluir produto. Por favor, tente novamente. " . $conexao->error;
  }
} else {
  echo "Produto não registrado. Por favor, tente novamente." . $conexao->error;
}
$conexao->close();*/
?>