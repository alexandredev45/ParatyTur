<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $responsavel = $_POST['responsavel'];
    $fantasia = $_POST['fantasia'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    $sql = "INSERT INTO `empresas` (`responsavel`, `fantasia`, `cnpj`, `email`, `telefone`, `rua`, `bairro`, `cidade`, `estado`) VALUES ('$responsavel', '$fantasia', '$cnpj', '$email', '$telefone', '$rua', '$bairro', '$cidade', '$estado')";

    if ($conexao->query($sql) === TRUE) {
        echo "Empresa cadastrada com sucesso.";
    } else {
        echo "Erro ao cadastrar a empresa: " . $conexao->error;
    }
}
?>

<!-- Formulário de cadastro -->
<form method="POST" action="create.php">
    <!-- Campos do formulário aqui -->
    <button type="submit">Cadastrar</button>
</form>
