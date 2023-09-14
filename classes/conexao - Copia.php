<?php
    ///$dbHost     = "localhost";
    //$dbUsername = "esocialu_dev";
    //$dbPassword = "]Jkj{qKcDZ+.";
    //$dbName     = "esocialu_paratytur";

$dbHost = 'localhost';
$dbUsername = 'esocialu_dev';
$dbPassword = ']Jkj{qKcDZ+.';
$dbName = 'esocialu_paratytur';

$conexao = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);


    // Verificar conexão
if (!$conexao) {
    echo "" .mysqli_connect_error();
}else{
    echo "<h1>SUCESSO</h1>";
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lógica de verificação de credenciais.
    // Consulta SQL para inserir as credenciais no banco de dados.

    $mysql = "INSERT INTO `usuario` (id_usuario, usuario, senha) VALUES (NULL, 'adm', '1234')";
    
    if ($conexao->query($mysql) === TRUE) {
        // Credenciais inseridas com sucesso.
        echo "Conexão feita com sucesso.";
        //header("Location: tela_adm.php"); // Caso esteja tudo certo, redireciona para tela_adm.php
        exit();
    } else {
        // Caso ocorra algum erro ao inserir as credenciais, exiba uma mensagem de erro.
        echo "Falha na conexão com o banco de dados: " . $conexao->error;
    }
    // Fechar a conexão com o banco de dados

}
mysqli_close($conexao);
?>
