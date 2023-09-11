<?php
include_once("../classes/conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    //conexao com o banco
    $host = "localhost";
    $user = "root";
    $senha = "";
    $dbname = "ParatyTur";

    $conexao = new mysqli($host, $user, $senha, $dbname);
    
    if ($conexao->connect_error) {
        die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
    }
    
    $nome = $_POST['nome'];
    $proprietario = $_POST['proprietario'];
    $comprimento = $_POST['comprimento'];
    $capacidade = $_POST['capacidade'];
    $ano = $_POST['ano'];
    //CADASTRA novo barco
    $sql = "INSERT INTO `barco` (`nome`, `proprietario`, `comprimento`, `capacidade`, `ano`) VALUES ('$nome', '$proprietario', '$comprimento', '$capacidade', '$ano')";

    if ($conexao->query($mysql) === TRUE){
        echo "Seu barco foi registrado com sucesso."; // sucesso ao inserir o novo barco no banco de dados
        exit();
    } else {
        echo "Ocorreu um erro ao registrar seu barco, por favor, verifique os valores inseridos e tente novamente." . $conexao->error; // erro ao inserir o barco no banco de dados
    }
}

    //EXIBE listas de barco para EDIÇÃO e EXCLUSÃO
if (isset($_GET['editar'])) {
    $barco_id = $_GET['editar'];

    $sql = "SELECT * FROM `barco` WHERE `id_barco` = $barco_id";
    
    $resultado = $conexao->query($mysql);

    echo "<table>";
    echo "<tr><th>ID</th><th>Nome</th><th>Proprietário</th><th>Comprimento</th><th>Capacidade</th><th>Ano</th><th>Ações</th></tr>";

while ($linha = $resultado->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $linha['id_barco'] . "</td>";
    echo "<td>" . $linha['nome'] . "</td>";
    echo "<td>" . $linha['proprietario'] . "</td>";
    echo "<td>" . $linha['comprimento'] . "</td>";
    echo "<td>" . $linha['capacidade'] . "</td>";
    echo "<td>" . $linha['ano'] . "</td>";
    echo "<td><a href='?editar=" . $linha['id_barco'] . "'>Editar</a> | <a href='?excluir=" . $linha['id_barco'] . "'>Excluir</a></td>";
    echo "</tr>";
}
    echo "</table>";

} elseif (isset($_GET['excluir'])) {
    $barco_id = $_GET['excluir'];

    $sql = "DELETE FROM `barco` WHERE `id_barco` = $barco_id";

    if ($conexao->query($mysql) === TRUE) {
        echo "Barco excluído com sucesso.";
    } else {
        echo "Erro ao excluir o barco: " . $conexao->error;
    }
} else {
    echo "Nenhum barco registrado.";
}
    $conexao->close();// Fechar a conexão com o banco de dados

?>