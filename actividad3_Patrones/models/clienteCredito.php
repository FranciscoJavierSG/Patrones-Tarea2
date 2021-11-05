<?php
namespace FactoryMethod;

require_once 'cliente.php';
require_once 'pedidoCredito.php';

class ClienteCredito extends Cliente
{

    protected function creaPedido($cantidad)
    {
        return new PedidoCredito($cantidad);
    }
}

?>
