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

//INNER JOIN para solicitar dados das chaves
$mysql = "SELECT v.id_venda, v.id_pousada, v.id_passeio, v.id_barco, v.id_produto, v.id_agenda, p.nome_fantasia
        FROM venda v
        INNER JOIN pousada p ON v.id_pousada = p.id_pousada";

$resultado = $conexao->query($mysql);

if ($resultado->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Venda</th>Pousada</th><th>Nome Fantasia da Pousada</th><th>Passeio</th><th>Barco</th><th>Produto</th><th>Agenda</th></tr>";

    while ($linha = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $linha['id_venda'] . "</td>";
        echo "<td>" . $linha['id_pousada'] . "</td>";
        echo "<td>" . $linha['nome_fantasia'] . "</td>";
        echo "<td>" . $linha['id_passeio'] . "</td>";
        echo "<td>" . $linha['id_barco'] . "</td>";
        echo "<td>" . $linha['id_produto'] . "</td>";
        echo "<td>" . $linha['id_agenda'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

} else {
    echo "Nenhuma venda registrada.";
}

// Fechar a conexão com o banco de dados
$conexao->close();
?>