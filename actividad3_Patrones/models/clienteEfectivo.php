<?php
namespace FactoryMethod;

require_once 'Cliente.php';
require_once 'PedidoEfectivo.php';

class ClienteEfectivo extends Cliente
{

    protected function creaPedido($cantidad)
    {
        return new PedidoEfectivo($cantidad);
    }
}

?>

