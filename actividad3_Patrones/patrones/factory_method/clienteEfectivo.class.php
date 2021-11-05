<?php
namespace FactoryMethod;

require_once 'cliente.class.php';
require_once 'pedidoEfectivo.class.php';

class ClienteEfectivo extends Cliente
{

    protected function creaPedido($cantidad)
    {
        return new PedidoEfectivo($cantidad);
    }
}

?>

