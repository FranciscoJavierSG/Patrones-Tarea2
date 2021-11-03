<?php
namespace factory_method;

require_once 'pedido.php';
require_once 'estadoPedido.php';

class PedidoCredito extends Pedido
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
            'tipoPago' =>  "Credito",
            'cantidad' =>  number_format($this->cantidad, 2, ',', ' '),
            'estadoPedido' => $this->estado = EstadoPedido::setEstado(4)
        );
    }

    public function valida()
    {
        return ($this->cantidad >= 1000.0) &&
                 ($this->cantidad <= 5000.0);
    }
}
