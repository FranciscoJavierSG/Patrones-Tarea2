<?php
namespace FactoryMethod;

//require_once '../Herramientas.class.php';
require_once 'Pedido.php';

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
        
                 $this->statusPago=array(
                    'tipoPago' =>  "Efectivo",
                    'cantidad' =>  number_format($this->cantidad, 2, ',', ' '),
                    'pagoRealizado' =>  true,
                
                );
    }

    public function valida()
    {
        return true;
    }
}

?>