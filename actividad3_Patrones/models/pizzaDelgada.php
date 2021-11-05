<?php

namespace AbstractFactory;

require_once 'pizza.php';


class PizzaDelgada extends Pizza {
    /**
     *
     * @param string $tipoMasa            
     * @param string $tamaño            
     * @param string $cantidadQueso            
     * @param string $seleccionarIngredientes // definir esto            
     * @return PizzaDelgada
     */
    public function __construct($tipoMasa, $tamaño, $cantidadQueso, $seleccionarIngredientes) {
        parent::__construct($tipoMasa, $tamaño, $cantidadQueso, $seleccionarIngredientes);
    }

    public function muestraCaracteristicas() {


        return array(
            'tipo' =>  "Delgada",
            'tipoMasa' =>  $this->tipoMasa,
            'tamaño' => $this->tamaño,
            'cantidadQueso' => $this->cantidadQueso,
            'seleccionarIngredientes' => $this->seleccionarIngredientes,
        );
    }
}
