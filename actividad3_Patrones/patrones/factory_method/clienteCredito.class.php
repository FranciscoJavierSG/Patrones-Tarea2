<?php
namespace FactoryMethod;

require_once 'cliente.class.php';
require_once 'pedidoCredito.class.php';

class ClienteCredito extends Cliente
{

    protected function creaPedido($cantidad)
    {
        return new PedidoCredito($cantidad);
    }
}

?>
