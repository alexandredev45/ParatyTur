<?php
include_once(db.sql);

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

    $sql = "INSERT INTO 'barco' ('nome', 'proprietario', 'comprimento', 'capacidade', 'ano') VALUES ('$nome', '$proprietario', '$comprimento', '$capacidade', '$ano')";

    if ($conexao->query($mysql) === TRUE){
        echo "Seu barco foi registrado com sucesso."; // sucesso ao inserir o novo barco no banco de dados
        exit();
    } else {
        echo "Ocorreu um erro ao registrar seu barco, por favor, verifique os valores inseridos e tente novamente." . $conexao->error; // erro ao inserir o barco no banco de dados
    }
}

    $sql = "SELECT * FROM 'barco'";

    $resultado = $conexao->query($mysql);
    
    if ($resultado->num_rows > 0) {
        // Exibir os barcos registrados em uma tabela HTML (mesma lógica de exibição que você já tem)
        echo "<table>";
        echo "<tr><th>ID</th><th>Nome</th><th>Proprietário</th><th>Comprimento</th><th>Capacidade</th><th>Ano de </th></tr>";

    // Loop para exibir os registros
    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha['id_barco'] . "</td>";
        echo "<td>" . $linha['nome'] . "</td>";
        echo "<td>" . $linha['proprietario'] . "</td>";
        echo "<td>" . $linha['comprimento'] . "</td>";
        echo "<td>" . $linha['capacidade'] . "</td>";
        echo "<td>" . $linha['ano'] . "</td>";
        echo "</tr>";
    }
        echo "</table>";
    } else {
        echo "Nenhum barco registrado.";
    }
    




    $conexao->close();// Fechar a conexão com o banco de dados

?>