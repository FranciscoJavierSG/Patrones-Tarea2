<?php
namespace FactoryMethod;

require_once 'pedido.class.php';

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
            'pagoRealizado' =>  true,
        
        );
    }

    public function valida()
    {
        return ($this->cantidad >= 1000.0) &&
                 ($this->cantidad <= 5000.0);
    }
}

?>
