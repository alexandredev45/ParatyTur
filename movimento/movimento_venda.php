<?php 

//verificar variaveis

include_once("../classes/conexao.php");

$id_venda       = $_POST['id_venda'];
$id_pousada     = $_POST['id_pousada'];
$nome_fantasia  = $_POST['nome_fantasia'];
$id_passeio     = $_POST['id_passeio'];
$id_barco       = $_POST['id_barco'];
$id_produto     = $_POST['id_produto'];
$id_agenda      = $_POST['id_agenda'];

try {
$conexao = new PDO('mysql:host=ns950.hostgator.com.br;dbname=esocialu_paratytur', $user, $senha);
$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    //INNER JOIN para solicitar dados das chaves
$mysql = "SELECT v.id_venda, v.id_pousada, v.id_passeio, v.id_barco, v.id_produto, v.id_agenda, p.nome_fantasia
        FROM venda v
        INNER JOIN pousada p ON v.id_pousada = p.id_pousada";

$resultado = $conexao->prepare($mysql);
$resultado->execute();

if ($resultado->rowCount() > 0) {
    echo "<table>";
    echo "<tr><th>Venda</th><th>Pousada</th><th>Nome Fantasia da Pousada</th><th>Passeio</th><th>Barco</th><th>Produto</th><th>Agenda</th></tr>";

    while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)) {
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
$conexao = null;
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>