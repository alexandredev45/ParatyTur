<?php 
include_once("../classes/conexao.php");

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $nome = $_POST['nome'];
    $rg_cpf = $_POST['rg_cpf'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    //CADASTRAR novo parceiro
    $mysql = "INSERT INTO `parceiro` (`nome`, `rg_cpf`, `telefone`, `email`) VALUES ('$nome', '$rg_cpf', '$telefone', '$email')";

    if ($conexao->query($mysql) === TRUE){
        echo "Parceiro registrado com sucesso."; // sucesso ao inserir o novo parceiro no banco de dados
        exit();
    } else {
        echo "Ocorreu um erro ao registrar este parceiro, por favor, verifique os valores inseridos e tente novamente." . $conexao->error; // erro ao inserir o barco no banco de dados
    }
}

    //EXIBIR listas de parceiro para EDIÇÃO e EXCLUSÃO
if (isset($_GET['editar'])) {
    $id_parceiro = $_GET['editar'];

    $mysql = "SELECT * FROM `parceiro` WHERE `id_parceiro` = $id_parceiro";
    $resultado = $conexao->query($mysql);
    
    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Proprietário</th><th>Comprimento</th><th>Capacidade</th><th>Ano</th><th>Ações</th></tr>";
    
        while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha['id_parceiro'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['rg_cpf'] . "</td>";
        echo "<td>" . $linha['telefone'] . "</td>";
        echo "<td>" . $linha['email'] . "</td>";
        echo "<td><a href='?editar=" . $linha['id_parceiro'] . "'>Editar</a> | <a href='?excluir=" . $linha['id_parceiro'] . "'>Excluir</a></td>";
        echo "</tr>";
        }
        echo "</table>";
    }
} elseif (isset($_GET['excluir'])) {
    $id_parceiro = $_GET['excluir'];

    $mysql = "DELETE FROM `parceiro` WHERE `id_parceiro` = $id_parceiro";

    if ($conexao->query($mysql) === TRUE) {
        echo "Parceiro excluído com sucesso.";
        exit();
    } else {
        echo "Erro ao excluir este parceiro. Por favor, tente novamente. " . $conexao->error;
    }
} else {
    echo "Nenhum parceiro registrado." . $conexao->error;
}
$conexao->close();// Fechar a conexão com o banco de dados
?>