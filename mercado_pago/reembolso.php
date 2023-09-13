<<<<<<< HEAD
<?php
 //REEMBOLSO TOTAL
MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");
 
$reembolso = new MercadoPago\Reembolso();
$reembolso->id_pagamento = 000000000;
$reembolso->salvar();

//REEMBOLSO PARCIAL
 
MercadoPago\SDK::setAccessToken("YOUR_ACCESS_TOKEN");
 
$reembolso = new MercadoPago\Refund();
$reembolso->valor = 0.0;
$reembolso->id_pagamento = 0;
$reembolso->salvar();
 
//REEMBOLSO ESPECIFICO

 $pagamento = MercadoPago\Pagamento::find_by_id($id_pagamento);
 $reembolso = $pagamento->reembolso();
?>
=======
<?php ?>
>>>>>>> 9cba7d19c0f5c128e14dadd72ff9fd2172e604fc
