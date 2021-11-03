<?php
namespace FactoryMethod;

abstract class Pedido
{
    /**
     * 
     * @var double
     */
    public $cantidad;
    // public $estadoPedido = array("Nuevo pedido", "Preparando pedido", "Por pagar", "Pagado", "Entregado"); //Dominio????
    
    /**
     *
     * @param double $cantidad            
     */
    public function __construct($cantidad)
    {
        $this->cantidad = $cantidad;
    }

    /**
     *
     * @return boolean
     */
    public abstract function valida();

    /**
     * @return void
     */
    public abstract function paga();
}
?>