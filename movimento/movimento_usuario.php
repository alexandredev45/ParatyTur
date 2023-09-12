<?php 
include_once("../classes/conexao.php");

$dbHost     = "localhost";
$dbUsername = "esocialu_AlexandreDev45";
$dbPassword = "8416RWo{bXM-";
$dbName     = "esocialu_ParatyTur";
    
$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    // VERIFICAR conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}
    // CADASTRAR novo usuario
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    $mysql = "INSERT INTO `usuario` (`usuario`, `senha`) VALUES ('$usuario', '$senha')";
    
    if ($conexao->query($mysql) === TRUE) {
        echo "Usuário cadastrado com sucesso.";
        exit();
    } else {
        echo "Erro ao cadastrar usuário. Por favor, tente novamente. " . $conexao->error;
    }
}
    // EXIBIR lista de usuário para EDIÇÃO e EXCLUSÃO

if (isset($_GET['editar'])){
    $id_usuario = $_GET['editar'];

    $mysql = "SELECT * FROM `usuario` WHERE `id_usuario` = $id_usuario";
    $resultado = $conexao->query($mysql);

    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Usuário</th><th>Senha</th></tr>";
        
        while ($linha = $resultado->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $linha['id_usuario'] . "</td>";
            echo "<td>" . $linha['usuario'] . "</td>";
            echo "<td>" . $linha['senha'] . "</td>";
            echo "<td>< a href='?editar=" . $linha['id_usuario'] . "'>Editar</a> | <a href='?excluir=" . $linha['id_usuario'] . "'>Excluir</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
} elseif (isset($_GET['excluir'])) { 
    $id_usuario = $_GET['excluir'];

    $mysql = "DELETE FROM `usuario` WHERE `id_usuario` = $id_usuario";

    if ($conexao->query($mysql) === TRUE) {
        echo "Usuário excluído com sucesso.";
        exit();
    } else {
        echo "Erro ao excluir usuário. Por favor, tente novamente. " . $conexao->error;
    }
} else {
    echo "Usuário não registrado. Por favor, tente novamente." . $conexao->error;
}
$conexao->close();
/*
    // EDITAR Usuário
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['editar'])) {
    $id_usuario = $_POST['id_usuario'];
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    
    $mysql = "UPDATE usuarios SET `usuario`='$usuario', senha='$senha' WHERE id_usuario=$id_usuario";
    
    if ($conexao->query($mysql) === TRUE) {
        echo "Usuário atualizado com sucesso.";
        exit();
    } else {
        echo "Erro ao atualizar usuário. Por favor, tente novamente. " . $conexao->error;
    }
}
    //EXCLUIR usuário
if (isset($_GET['excluir'])) {
    $id_usuario = $_GET['excluir'];

    $mysql = "DELETE FROM `usuario` WHERE id_usuario=$id_usuario";

    if ($conexao->query($mysql) === TRUE) {
        echo "Usuário excluído com sucesso.";
        exit();
    } else {
        echo "Erro ao excluir usuário. Por favor, tente novamente. " . $conexao->error;
    }
}
$conexao->close();

?>