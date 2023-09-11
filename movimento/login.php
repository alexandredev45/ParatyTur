<?php
include_once("../classes/conexao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $host = "localhost";
    $user = "root";
    $senha = "";
    $dbname = "ParatyTur";

    $conexao = new mysqli($host, $user, $senha, $dbname);

    // Verificar conexão
    if ($conexao->connect_error) {
        die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
    }

    $usuario = 'adm';
    $senha = '1234';

    // Lógica de verificação de credenciais.
    // Consulta SQL para inserir as credenciais no banco de dados.

    $mysql = "INSERT INTO 'login' ('id_login', 'usuario', 'senha') VALUES (NULL, 'adm', '1234')";

    if ($conexao->query($mysql) === TRUE) {
        // Credenciais inseridas com sucesso.
        echo "Registro inserido com sucesso.";
        //header("Location: tela_adm.html"); // Caso esteja tudo certo, redireciona para tela_adm.html
        exit();
    } else {
        // Caso ocorra algum erro ao inserir as credenciais, exiba uma mensagem de erro.
        echo "Erro ao inserir registro: " . $conexao->error;
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
}

?>
