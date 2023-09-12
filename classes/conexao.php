<?php
include_once("../classes/conexao.php");
$con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "paratytur.mysql.database.azure.com", "esocialu_AlexandreDev45", "{8416RWo{bXM-}", "{paratytur}", 3306, MYSQLI_CLIENT_SSL);

    // Verificar conexão
if ($conexao->connect_error) {
    die("Erro de conexão com o banco de dados: " . $conexao->connect_error);
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lógica de verificação de credenciais.
    // Consulta SQL para inserir as credenciais no banco de dados.

    $mysql = "INSERT INTO `usuario` (id_usuario, usuario, senha) VALUES (1, 'adm', '1234')";

    if (mysqli_query($conexao, $mysql)) {
        // Credenciais inseridas com sucesso.
        echo "Registro inserido com sucesso.";
        //header("Location: tela_adm.html"); // Caso esteja tudo certo, redireciona para tela_adm.html
        exit();
    } else {
        // Caso ocorra algum erro ao inserir as credenciais, exiba uma mensagem de erro.
        echo "Erro ao inserir registro: " . $conexao->error;
    }

    // Fechar a conexão com o banco de dados
    $conexao->close();
}



/*//$mysql = "INSERT INTO 'login' ('id_login', 'usuario', 'senha') VALUES (NULL, 'adm', '1234')";

    //if ($conexao->query($mysql) === TRUE) {
        //echo "Registro inserido com sucesso.";
        //header("Location: tela_adm.html");
        //exit();
    //} else
        //echo "Erro ao inserir registro: " . $conexao->error;



/*
    define('HOST', 'localhost');
    define('DBNAME', 'esocialu_ParatyTur');
    define('USER', 'esocialu_AlexandreDev45');
    define('PASSWORD', '8416RWo{bXM-');

    class Connect{
        protected $connection;

        function __construct(){
            $this->connectDatabase();
        }

        private function connectDatabase(){
            try 
            {
                $this->connection = new PDO('mysql:host='.HOST.';dbname='.DBNAME, USER, PASSWORD);
            } 
            catch (PDOException $e) 
            {
                echo "Error to connect with Database!".$e->getMessage();
                die();
            }
        } 

    }





    $dbHost     = "localhost";
    $dbUsername = "esocialu_AlexandreDev45";
    $dbPassword = "8416RWo{bXM-";
    $dbName     = "esocialu_ParatyTur"; //sem underline no azure sql

    
    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    */
?>
