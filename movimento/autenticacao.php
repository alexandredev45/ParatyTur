<?php
include_once("../classes/conexao.php");

try {
    $conexao = new PDO('mysql:host=ns950.hostgator.com.br;dbname=esocialu_paratytur', 'esocialu_dev', 'Hi~g$1X3#u6F');
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuario_digitado = $_POST['usuario'];
        $senha_digitada = $_POST['senha'];

        // Consulta SQL para verificar as credenciais do usuário
        $mysql = "SELECT senha FROM `usuarios` WHERE usuario = :usuario";
        $resultado = $conexao->prepare($mysql);
        $resultado->bindParam(':usuario', $usuario_digitado);
        $resultado->execute();

        if ($resultado->rowCount() > 0) {
            // Usuário encontrado no banco de dados
            $linha = $resultado->fetch(PDO::FETCH_ASSOC);
            $senhaHash = $linha['senha'];

            if (password_verify($senha_digitada, $senhaHash)) {
                header("Location: tela_adm.html");
                exit();
            } else {
                header("Location: tela_login.php?erro=senha_incorreta");
                exit();
            }

        } else {
            header("Location: tela_login.php?erro=usuario_nao_encontrado");
            exit();
        }
    }
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>