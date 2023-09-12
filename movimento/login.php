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

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $usuario = 'adm';
    $senha = '1234';
    // Consulta SQL para inserir as credenciais no banco de dados.

    $mysql = "INSERT INTO `usuario` (`id_usuario`, `usuario`, `senha`) VALUES (NULL, 'adm', '1234')";

    if (mysqli_query($conexao, $mysql)) {
        // Credenciais inseridas com sucesso.

        $_SESSION['msg'] = "<div class='alert alert-success'>Login feito com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../autenticacao.php';</script>");
        //header("Location: tela_adm.html"); // Caso esteja tudo certo, redireciona para tela_adm.html
        exit();
    }
    } else {
        // Caso ocorra algum erro ao inserir as credenciais, exiba uma mensagem de erro.
        $_SESSION['msg'] = "<div class='alert alert-success'>Ocorreu um erro ao fazer login. Por favor, tente novamente.</div>";
        echo("<script type='text/javascript'> location.href='../login.html';</script>"). $conexao->error;
    }
// Fechar a conexão com o banco de dados
$conexao->close();
?>