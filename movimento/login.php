<?php
<<<<<<< Updated upstream
include_once("../classes/conexao.php");

// Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
=======
include_once(tela_adm.html);

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
        //header("Location: index.html"); // Caso esteja tudo certo, redireciona para index.html
        exit();
    } else {
        // Caso ocorra algum erro ao inserir as credenciais, exiba uma mensagem de erro.
        echo "Erro ao inserir registro: " . $conexao->error;
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
>>>>>>> Stashed changes
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