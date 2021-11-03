<?php
namespace factory_method;

require_once 'cliente.php';
require_once 'pedidoEfectivo.php';

class ClienteEfectivo extends Cliente
{

    protected function creaPedido($cantidad)
    {
        return new PedidoEfectivo($cantidad);
    }
}

?>

