<<<<<<< HEAD
         
<?php

  MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

  $pagamento = new MercadoPago\Pagamento();

  $pagamento->quantidade_transacao = 100;
  $pagamento->token = "ff8080814c11e237014c1ff593b57b4d";
  $pagamento->parcelas = 1;
  $pagamento->cliente = array(
        "type" => "customer",
        "id" => "123456789-jxOV430go9fx2e"
    );

  $pagamento->salvar();

?>
=======
<?php ?>
>>>>>>> 9cba7d19c0f5c128e14dadd72ff9fd2172e604fc
