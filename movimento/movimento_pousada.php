<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome_responsavel = $_POST['responsavel'];
    $nome_fantasia = $_POST['fantasia'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    //REGISTRAR nova pousada
    $mysql = "INSERT INTO `pousada` (`responsavel`, `fantasia`, `cnpj`, `email`, `telefone`, `rua`, `bairro`, `cidade`, `estado`) VALUES ('$responsavel', '$fantasia', '$cnpj', '$email', '$telefone', '$rua', '$bairro', '$cidade', '$estado')";

    if ($conexao->query($mysql) === TRUE) {
        echo "Pousada cadastrada com sucesso.";
    } else {
        echo "Erro ao cadastrar a pousada: " . $conexao->error;
    }
}
//LISTAR pousadas.
$mysql = "SELECT * FROM `pousada`";
$resultado = $conexao->query($mysql);

if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Responsável</th><th>Fantasia</th><th>CNPJ</th><th>Email</th><th>Telefone</th><th>Rua</th><th>Bairro</th><th>Cidade</th><th>Estado</th></tr>";

    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha['id'] . "</td>";
        echo "<td>" . $linha['responsavel'] . "</td>";
        echo "<td>" . $linha['fantasia'] . "</td>";
        echo "<td>" . $linha['cnpj'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "<td>" . $linha['telefone'] . "</td>";
        echo "<td>" . $linha['rua'] . "</td>";
        echo "<td>" . $linha['bairro'] . "</td>";
        echo "<td>" . $linha['cidade'] . "</td>";
        echo "<td>" . $linha['estado'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Ocorreu um erro. Nenhuma pousada foi cadastrada. Por favor, verifique as informações e tente novamente.";
}

//EDITAR informações da Pousada.
    $mysql = "UPDATE `pousada` SET responsavel='$nome_responsavel', fantasia='$nome_fantasia', cnpj='$cnpj', email='$email', telefone='$telefone', rua='$rua', bairro='$bairro', cidade='$cidade', estado='$estado' WHERE id=$id_pousada";
if ($conexao->query($mysql) === TRUE) {
        echo "Pousada atualizada com sucesso.";
} else {
        echo "Erro ao atualizar a pousada: " . $conexao->error;
}
if (isset($_GET['editar'])) {
    $id_pousada = $_GET['editar'];
    
    $mysql = "SELECT * FROM empresas WHERE id=$id_pousada";
    $resultado = $conexao->query($mysql);
    
    if ($resultado->num_rows == 1) {
        $pousada = $resultado->fetch_assoc();
    }
}
//EXCLUI pousada.
if (isset($_GET['excluir'])) {
    $id = $_GET['excluir'];

    $sql = "DELETE FROM `pousada` WHERE id=$id_pousada";

    if ($conexao->query($sql) === TRUE) {
        echo "Pousada excluída com sucesso.";
    } else {
        echo "Ocorreu um erro ao excluir pousada. Por favor, verifique as informações e tente novamente. " . $conexao->error;
    }
}
// Fechar a conexão com o banco de dados
$conexao->close();
?>


