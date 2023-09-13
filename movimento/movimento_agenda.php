<?php 
include_once("../classes/conexao.php");

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}
// REGISTRAR agenda
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $id_agenda = $_POST['id_agenda'];
    $dia = $_POST['dia'];
    $hora = $_POST['hora'];
    $tempo = $_POST['tempo'];

    $mysql = "INSERT INTO `agenda` (`id_agenda`, `dia`, `hora`, `tempo`) VALUES ('$id_agenda', '$dia', '$hora', '$tempo')";
    
    if ($conexao->query($mysql) === TRUE) {
        echo "Agenda registrada com sucesso.";
        exit();
    } else {
        echo "Erro ao registrar agenda. Por favor, tente novamente. " . $conexao->error;
    }
}
    //EXIBIR listas de agenda para EDIÇÃO e EXCLUSÃO
if (isset($_GET['editar'])) {
    $id_agenda = $_GET['editar'];
    
    $mysql = "SELECT * FROM `agenda` WHERE `id_agenda` = $id_agenda";
    $resultado = $conexao->query($mysql);
        
    if ($resultado->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Dia</th><th>Hora</th><th>Tempo</th></tr>";
        
        while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha['id_agenda'] . "</td>";
        echo "<td>" . $linha['dia'] . "</td>";
        echo "<td>" . $linha['hora'] . "</td>";
        echo "<td>" . $linha['tempo'] . "</td>";
        echo "<td><a href='?editar=" . $linha['id_agenda'] . "'>Editar</a> | <a href='?excluir=" . $linha['id_agenda'] . "'>Excluir</a></td>";
        echo "</tr>";
        }
        echo "</table>";
    }
} elseif (isset($_GET['excluir'])) {
    $id_agenda = $_GET['excluir'];
    
    $mysql = "DELETE FROM `agenda` WHERE `id_agenda` = $id_agenda";
    
    if ($conexao->query($mysql) === TRUE) {
        echo "Agenda excluída com sucesso.";
        exit();
    } else {
        echo "Erro ao excluir agenda. Por favor, tente novamente. " . $conexao->error;
    }
} else {
    echo "Nenhuma agenda registrada." . $conexao->error;
}
$conexao->close();// Fechar a conexão com o banco de dados
?>