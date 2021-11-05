<?php
namespace AbstractFactory;

require_once 'fabricaPizza.class.php';
require_once 'pizzaNormal.class.php';
//require_once 'ScooterElectrico.class.php';

class masaNormal implements FabricaPizza
{

    /**
     *
     * @param string $tipoMasa            
     * @param string $tamaño            
     * @param string $cantidadQueso            
     * @param string $seleccionarIngredientes // definir esto            
     * @return PizzaNormal
     */
    public function creaPizzaNormal($tipoMasa, $tamaño, $cantidadQueso,  $seleccionarIngredientes)
    {
        return new PizzaNormal($tipoMasa, $tamaño, 
            $cantidadQueso,  $seleccionarIngredientes);
    }
}

?>