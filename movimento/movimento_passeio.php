<?php
include_once("../classes/conexao.php");

$dbHost     = "localhost";
$dbUsername = "esocialu_AlexandreDev45";
$dbPassword = "8416RWo{bXM-";
$dbName     = "esocialu_ParatyTur";

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}
// CADASTRA passeio
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $local_ = $_POST['local_'];
    $duracao = $_POST['duracao'];
    $valor = $_POST['valor'];
    $descricao = $_POST['descricao'];

    // CADASTRAR novo barco
    $mysql = "INSERT INTO `passeio` (`nome`, `local_`, `duracao`, `valor`, `descricao`) VALUES ('$nome', '$local_', '$duracao', '$valor', '$descricao')";

    if ($conexao->query($mysql) === TRUE) {
        echo "Seu passeio foi registrado com sucesso.";
        exit();
    } else {
        echo "Ocorreu um erro ao registrar passeio, por favor, verifique os valores inseridos e tente novamente." . $conexao->error;
    }
}

    // EXIBIR lista de barcos para EDIÇÃO e EXCLUSÃO
if (isset($_GET['editar'])) {
    $id_passeio = $_GET['editar'];

    $mysql = "SELECT * FROM `passeio` WHERE `id_passeio` = $id_passeio";
    
    $resultado = $conexao->query($mysql);

    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Local</th><th>Duração</th><th>Valor</th><th>Descrição</th></tr>";

    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha['id_passeio'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['local_'] . "</td>";
        echo "<td>" . $linha['duracao'] . "</td>";
        echo "<td>" . $linha['valor'] . "</td>";
        echo "<td>" . $linha['descricao'] . "</td>";
        echo "<td><a href='?editar=" . $linha['id_passeio'] . "'>Editar</a> | <a href='?excluir=" . $linha['id_passeio'] . "'>Excluir</a></td>";
        echo "</tr>";
    }
    echo "</table>";

} elseif (isset($_GET['excluir'])) {
    $id_passeio = $_GET['excluir'];

    $mysql = "DELETE FROM `passeio` WHERE `id_passeio` = $id_passeio";

    if ($conexao->query($mysql) === TRUE) {
        echo "Passeio excluído com sucesso.";
        exit();
    } else {
        echo "Erro ao excluir passeio. Por favor, tente novamente." . $conexao->error;
    }
} else {
    // Se não houver operações, listar todos os barcos
    $sql = "SELECT * FROM `barco`";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Proprietário</th><th>Comprimento</th><th>Capacidade</th><th>Ano</th><th>Ações</th></tr>";

        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha['id_passeio'] . "</td>";
            echo "<td>" . $linha['nome'] . "</td>";
            echo "<td>" . $linha['local_'] . "</td>";
            echo "<td>" . $linha['duracao'] . "</td>";
            echo "<td>" . $linha['calor'] . "</td>";
            echo "<td>" . $linha['descricao'] . "</td>";
            echo "<td><a href='?editar=" . $linha['id_passeio'] . "'>Editar</a> | <a href='?excluir=" . $linha['id_passeio'] . "'>Excluir</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "Nenhum passeio registrado.";
    }
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>