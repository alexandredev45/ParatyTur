<?php
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
?>
