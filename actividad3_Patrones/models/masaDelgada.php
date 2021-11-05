<?php
namespace AbstractFactory;

require_once 'fabricaPizza.php';
require_once 'pizzaDelgada.php';
//require_once 'ScooterElectrico.class.php';

class MasaDelgada implements FabricaPizza
{

    /**
     *
     * @param string $tipoMasa            
     * @param string $tamaño            
     * @param string $cantidadQueso            
     * @param string $seleccionarIngredientes // definir esto            
     * @return PizzaDelgada
     */
    public function crearPizzaDelgada($tipoMasa, $tamaño, $cantidadQueso,  $seleccionarIngredientes)
    {
        return new PizzaDelgada($tipoMasa, $tamaño, 
            $cantidadQueso,  $seleccionarIngredientes);
    }
}

?>
