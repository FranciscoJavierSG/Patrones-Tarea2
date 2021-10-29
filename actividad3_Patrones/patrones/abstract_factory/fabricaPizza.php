<?php
namespace AbstractFactory;

interface FabricaPizza
{

    /**
     *
     * @param string $tipoMasa            
     * @param string $tamaño            
     * @param string $cantidadQueso            
     * @param string $seleccionarIngredientes // definir esto            
     * @return PizzaNormal
     */
    public function creaPizzaNormal($tipoMasa, $tamaño, $cantidadQueso,  $seleccionarIngredientes);

    /**
     *
     * @param string $tipoMasa            
     * @param string $tamaño            
     * @param string $cantidadQueso            
     * @param string $seleccionarIngredientes // definir esto            
     * @return PizzaDelgada
     */
    public function creaPizzaDelgada($tipoMasa, $tamaño, $cantidadQueso,  $seleccionarIngredientes);
}

?>