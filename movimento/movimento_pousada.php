<?php
include_once('../classes/conexao.php');

    // VERFICAR conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $nome_responsavel = $_POST['nome_responsavel'];
    $nome_fantasia = $_POST['nome_fantasia'];
    $cnpj = $_POST['cnpj'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];

    //CADASTRAR nova pousada
    $mysql = "INSERT INTO `pousada` (`nome_responsavel`, `nome_fantasia`, `cnpj`, `email`, `telefone`, `rua`, `bairro`, `cidade`, `estado`) VALUES ('$nome_responsavel', '$nome_fantasia', '$cnpj', '$email', '$telefone', '$rua', '$bairro', '$cidade', '$estado')";

    if ($conexao->query($mysql) === TRUE) {
        echo "Pousada cadastrada com sucesso.";
        exit();
    } else {
        echo "Erro ao cadastrar a pousada. Por favor, verifique as informações e tente novamente." . $conexao->error;
    }
}
    //LISTAR pousadas
if (isset($_GET['editar'])) {
    $id_pousada = $_GET['editar'];

    $mysql = "SELECT * FROM `pousada` WHERE `id_pousada`= $id_pousada";
    $resultado = $conexao->query($mysql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Responsável</th><th>Nome Fantasia</th><th>CNPJ</th><th>Email</th><th>Telefone</th><th>Rua</th><th>Bairro</th><th>Cidade</th><th>Estado</th></tr>";
    
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha['id_pousada'] . "</td>";
            echo "<td>" . $linha['nome_responsavel'] . "</td>";
            echo "<td>" . $linha['nome_fantasia'] . "</td>";
            echo "<td>" . $linha['cnpj'] . "</td>";
            echo "<td>" . $linha['email'] . "</td>";
            echo "<td>" . $linha['telefone'] . "</td>";
            echo "<td>" . $linha['rua'] . "</td>";
            echo "<td>" . $linha['bairro'] . "</td>";
            echo "<td>" . $linha['cidade'] . "</td>";
            echo "<td>" . $linha['estado'] . "</td>";
            echo "<td><a href='?editar=" . $linha['id_pousada'] . "'>Editar</a> | <a href='?excluir=" . $linha['id_pousada'] . "'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }
} elseif (isset($_GET['excluir'])) {
    $id_pousada = $GET_['excluir'];

    $mysql = "DELETE FROM `pousada` WHERE `id_pousada` = $id_pousada";

    if ($conexao->query($mysql) === TRUE) {
        echo "Pousada excluída com sucesso.";
        exit();
    } else {
        echo "Ocorreu um erro ao excluir pousada. Por favor, verifique as informações e tente novamente." . $conexao->error;
    }
} else {
    echo "Ocorreu um erro. Nenhuma pousada foi registrada. Por favor, verifique as informações e tente novamente." . $conxao->error;
}
$conexao->close();
?>


