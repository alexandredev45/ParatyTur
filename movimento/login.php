<?php
(session_start());
include_once("../classes/conexao.php");

try{
    $conexao = new PDO('mysql:host=localhost;dbname=esocialu_ParatyTur', 'esocialu_AlexandreDev45', '8416RWo{bXM-');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['cadastrar'])) {
    $usuario = 'adm';
    $senha = '1234';

    // Consulta SQL para inserir as credenciais no banco de dados.
    $mysql = "INSERT INTO `usuario` (`id_usuario`, `usuario`, `senha`) VALUES (NULL, :usuario, :senha)";
    $resultado= $conexao->prepare($mysql);
    $resultado->bindParam(':usuario', $usuario);
    $resultado->bindParam(':senha', $senha);

    if ($resultado->execute()) {
        // Credenciais inseridas com sucesso.

        $_SESSION['msg'] = "<div class='alert alert-success'>Login feito com sucesso!</div>";
        echo("<script type='text/javascript'> location.href='../autenticacao.php';</script>");
        //header("Location: tela_adm.html"); // Caso esteja tudo certo, redireciona para tela_adm.html
        exit();
    } else {
        // Caso ocorra algum erro ao inserir as credenciais, exiba uma mensagem de erro.
        $_SESSION['msg'] = "<div class='alert alert-success'>Ocorreu um erro ao fazer login. Por favor, tente novamente.</div>";
        echo("<script type='text/javascript'> location.href='../login.html';</script>"). $conexao->error;
        exit();
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>