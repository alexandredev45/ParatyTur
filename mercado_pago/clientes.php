
<?php
    //CRIAR cliente
  MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

  $cliente = new MercadoPago\Customer();
  $cliente->email = "test_payer_12345@testuser.com";
  $cliente->salvar();

  $cartao = new MercadoPago\Card();
  $cartao->token = "9b2d63e00d66a8c721607214cedaecda";
  $cartao->id_cliente = $cliente->id();
  $cartao->emissor = array("id" => "3245612");
  $cartao->meio_pagamento = array("id" => "cartao_debito");
  $cartao->salvar();

    //PESQUISAR clientes
  $filtrar = array(
    "id"=>"247711297-jxOV430go9fx2e"
  );

  $cliente = MercadoPago\Cliente::search($filtrar);

  // ATUALIZAR clientes
  MercadoPago\SDK::setAccessToken("ENV_ACCESS_TOKEN");

  $cliente = new MercadoPago\Customer();
  $cliente->email = "user@user.com";
  $cliente->nome = "john";
  $cliente->sobrenome = "wagner";
  $cliente->telefone = array("area_code" => "11", "number" => "001234567");
  $cliente->rg_cpf= array("type" => "CPF", "number" => "12341234");
  $cliente->endereco_padrao = "Casa";
  $cliente->endereco = array("zip_code" => "52", "street_name" => "Av. das Nações Unidas", "street_number" => "2");
  $cliente->descricao = "Informações do cliente";
  $cliente->cartao_preferencia = "None";
  $cliente->update();
?>     
<?php ?>
