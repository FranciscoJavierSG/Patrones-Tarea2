<?php
namespace FactoryMethod;

require_once 'Cliente.php';
require_once 'PedidoCredito.php';

class ClienteCredito extends Cliente
{

    protected function creaPedido($cantidad)
    {
        return new PedidoCredito($cantidad);
    }
}

?>
