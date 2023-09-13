<?php
// SDK do Mercado Pago
require __DIR__ .  '/vendor/autoload.php';

// Configure as credenciais
MercadoPago\SDK::setAccessToken('PROD_ACCESS_TOKEN');

// Crie um objeto de preferência
$preference = new MercadoPago\Preferencia();

// Crie um item na preferência
$produto = new MercadoPago\Produto();
$produto->nome = 'Meu produto';
$produto->quantidade = 1;
$produto->preco_unidade = 75.56;
$preferencia->produto = array($produto);
$preferencia->salvar();
?>