<?php

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
    //
    $nome = $_POST['nome'];
    $proprietario = $_POST['proprietario'];
    $comprimento = $_POST['comprimento'];
    $capacidade = $_POST['capacidade'];
    $ano = $_POST['ano'];

    $sql = "INSERT INTO 'barcos' ('nome', 'proprietario', 'comprimento', 'capacidade', 'ano') VALUES ('$nome', '$proprietario', '$comprimento', '$capacidade', '$ano')";

    if ($conexao->query($sql) === TRUE){
        echo "Seu barco foi registrado com sucesso."; // sucesso ao inserir o novo barco no banco de dados
        exit();
    } else {
        echo "Ocorreu um erro ao registrar seu barco, por favor, verifique os valores inseridos e tente novamente." . $conexao->error; // erro ao inserir o barco no banco de dados
    }
}
?>