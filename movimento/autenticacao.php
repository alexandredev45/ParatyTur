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