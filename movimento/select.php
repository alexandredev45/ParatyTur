<?php

include_once "../movimento/select.php";

$cmd = $pdo->prepare("SELECT * FROM barco");
$cmd-> bindValue(":id");
$cmd-> execute();
$cmd-> fetchAll();


?>
