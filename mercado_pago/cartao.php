<?php
    $cliente = MercadoPago\Cliente::find_by_id($id_cliente);
    $cartao = $cliente->cartao_preferencia();
?>