<?php
//include_once("../classes/conexao.php");

    ///$dbHost     = "localhost";
    //$dbUsername = "esocialu_dev";
    //$dbPassword = "]Jkj{qKcDZ+.";
    //$dbName     = "esocialu_paratytur";
    
    $conexao = mysqli_connect ("mysql:host=localhost;dbname=", "if0_35026416", "vKnh76PQ7WtjAi", "esocialu_ParatyTur");

    // Verificar conexão
if (!$conexao) {
    echo "" .mysqli_connect_error();  
}
echo "<h1>SUCESSO</h1>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Lógica de verificação de credenciais.
    // Consulta SQL para inserir as credenciais no banco de dados.

    $mysql = "INSERT INTO `usuario` (id_usuario, usuario, senha) VALUES (NULL, 'adm', '1234')";
    
    if ($conexao->query($mysql) === TRUE) {
        // Credenciais inseridas com sucesso.
        echo "Conexão feita com sucesso.";
        header("Location: tela_adm.php"); // Caso esteja tudo certo, redireciona para tela_adm.php
        exit();
    } else {
        // Caso ocorra algum erro ao inserir as credenciais, exiba uma mensagem de erro.
        echo "Falha na conexão com o banco de dados: " . $conexao->error;
    }
    // Fechar a conexão com o banco de dados

}
mysqli_close($conexao);





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
    */
?>
