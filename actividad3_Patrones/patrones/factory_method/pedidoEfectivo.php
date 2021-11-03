<?php
namespace factory_method;

//require_once '../Herramientas.class.php';
require_once 'pedido.php';

class PedidoEfectivo extends Pedido
{

    /**
     *
     * @param double $cantidad            
     */
    public function __construct($cantidad)
    {
        parent::__construct($cantidad);
    }

    public function paga()
    {
        $this->estadoPedido=array(
        'tipoPago' =>  "Efectivo",
        'cantidad' =>  number_format($this->cantidad, 2, ',', ' '),
        'estadoPedido' => $this->estado = EstadoPedido::setEstado(4)
        );
    }

    public function valida()
    {
        return true;
    }
}
