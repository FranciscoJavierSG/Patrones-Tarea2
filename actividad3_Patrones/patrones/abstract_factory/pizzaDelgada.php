<?php
namespace AbstractFactory;

abstract class PizzaDelgada
{
    /**
     * 
     * @var string
     */
    public $tipoMasa;
    /**
     * 
     * @var string
     */
    public $tamaño;
    /**
     * 
     * @var string
     */
    public $cantidadQueso;
    /**
     * 
     * @var string
     */
    public $seleccionarIngredientes;
    
    /**
     *
     * @param string $tipoMasa            
     * @param string $tamaño            
     * @param string $cantidadQueso            
     * @param string $seleccionarIngredientes // definir esto            
     * @return PizzaDelgada
     */
    public function __construct($tipoMasa, $tamaño, 
        $cantidadQueso, $seleccionarIngredientes)
    {
        $this->tipoMasa = $tipoMasa;
        $this->tamaño = $tamaño;
        $this->cantidadQueso = $cantidadQueso;
        $this->seleccionarIngredientes = $seleccionarIngredientes;
    }

    public function muestraCaracteristicas(){     
        return array(
            'pizza' =>  "Delgada",
            'tipoMasa' =>  $this->tipoMasa,
            'tamaño' => $this->tamaño,
            'cantidadQueso' => $this->cantidadQueso,
            'seleccionarIngredientes' => $this->seleccionarIngredientes,
        );
    }
    
}

?>
