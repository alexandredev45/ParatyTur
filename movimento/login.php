<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Adicionar a lógica de verificação de credenciais.
    //Verifica se o nome de usuário e a senha estão corretos.
    // Substituir a lógica abaixo pela implementação real de autenticação.

    if ($username === 'usuario' && $password === 'senha') {
        // Credenciais corretas, redirecionando para outra página.
        header("Location: index.html"); //Caso esteja tudo certo, redireciona para index.html
        exit();
    } else {
        // Caso credenciais inválidas, exiba uma mensagem de erro.
        echo "Credenciais inválidas. Por favor, tente novamente.";
    }
}
?>
