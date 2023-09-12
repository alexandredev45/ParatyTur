<?php
include_once("../classes/conexao.php");

//Login ADM1
$usuario1 = $_POST['usuario1'];
$senha1 = $_POST['senha1'];
// Login ADM2
$usuario2 = $_POST['usuario2'];
$senha2 = $_POST['senha2'];
//Login ADM3
$usuario3 = $_POST['usuario3'];
$senha3 = $_POST['senha3'];

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}

if (($usuario_digitado === $usuario1 && $senha_digitada === $senha1) ||
    ($usuario_digitado === $usuario2 && $senha_digitada === $senha2) ||
    ($usuario_digitado === $usuario3 && $senha_digitada === $senha3)) {
    // SE SIM: redireciona para a tela do administrador
    header("Location: tela_adm.html");
    exit();
} else {
    // SE NÃO: redireciona para a tela da pousada
    header("Location: tela_pousada.php");
    exit();
}

$conexao->close();
?>