<?php
namespace AbstractFactory;

require_once 'pizza.class.php';


class PizzaNormal extends Pizza
{
/**
     *
     * @param string $tipoMasa            
     * @param string $tamaño            
     * @param string $cantidadQueso            
     * @param string $seleccionarIngredientes // definir esto            
     * @return PizzaNormal
     */
    public function __construct($tipoMasa, $tamaño, $cantidadQueso,$seleccionarIngredientes) {
        parent::__construct($tipoMasa, $tamaño, $cantidadQueso,$seleccionarIngredientes);
    }

    public function muestraCaracteristicas()
    {
      

        return array(
            'tipo' =>  "Normal",
            'tipoMasa' =>  $this->tipoMasa,
        'tamaño' => $this->tamaño,
        'cantidadQueso' => $this->cantidadQueso,
        'seleccionarIngredientes' => $this->seleccionarIngredientes,
        );
    }
}
?>