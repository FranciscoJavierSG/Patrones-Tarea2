<?php

namespace FactoryMethod;

abstract class Cliente {
    /**
     * 
     * @var "Lista de Pedido"
     */
    public $pedidos = array();
    public $nombre;
    public $rut;
    public $correo;

    /**
     *
     * @param double $cantidad            
     * @return Pedido
     */
    protected abstract function creaPedido($cantidad);

    /**
     *
     * @param double $cantidad            
     */
    public function nuevoPedido($cantidad) {
        $pedido = $this->creaPedido($cantidad);
        if ($pedido->valida()) {
            $pedido->paga();
            $this->pedidos[] = $pedido;
        } else {
            $this->pedidos[] = $pedido;
        }

        //  var_dump($this->pedidos);
    }

    public function datoCliente() {
        return json_encode(array(
            'nombre' => $this->nombre,
            'rut' => $this->rut,
            'correo' => $this->correo
        ), JSON_PRETTY_PRINT);
    }

    public function getPedidos() {
        return $this->pedidos;
    }
}
