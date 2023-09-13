<<<<<<< HEAD
<?php
 
MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");
$pagamento_id = 000000000;Pagamento::find_by_id($pagamento_id);
$pagamento->status = "cancelado";
$pagamento->update();
 
?>
=======
<?php ?>
>>>>>>> 9cba7d19c0f5c128e14dadd72ff9fd2172e604fc
