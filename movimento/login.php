<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verificar credenciais
    $usuarioValido === true;

    if ($usuarioValido) {
        // Redirecionar para form.php com os valores
        header("Location: form.php?usuario=$usuario&email=$email&senha=$senha");
        exit();
    } else {
        echo "Credenciais inválidas. Por favor, tente novamente.";
    }
}
?>