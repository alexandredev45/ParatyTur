<?php
include_once("../classes/conexao.php");

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

    // VERIFICA se os dados de login SÃO IGUAIS a 'adm' e '1234'
    if ($usuario === 'adm' && $senha === '1234') {
        // SE SIM: redireciona para a tela do administrador
        header("Location: tela_adm.html");
        exit();
    } else {
        // SE NÃO: redireciona para a tela da pousada
        header("Location: tela_pousada.html");
        exit();
    }
}
$conexao->close();

?>