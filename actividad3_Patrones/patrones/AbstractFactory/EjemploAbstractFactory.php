<?php

namespace AbstractFactory;

use Exception;

require_once 'models/masaNormal.class.php';
require_once 'models/masaDelgada.class.php';
require_once 'models/fabricaPizza.class.php';

class EjemploAbstractFactory
{
    public $opcion;
    public $num_masaDelgada;
    public $num_masaNormal;
    public $masaNormal;
    public $masaDelgada;

    public function __construct($opcion, $num_masaNormal=0, $num_masaDelgada=0)
    {

        $this->opcion = $opcion;
        $this->num_masaNormal = $num_masaNormal;
        $this->num_masaDelgada = $num_masaDelgada;
        
    }

    public function generar()
    {
        
        try {

            switch ($this->opcion) {
                case 1:
                    
                    //deberia ser masaNormal? o deberia llamar a otra cosa?
                    $fabrica = new masaNormal();
                    
                    break;
                case 2:
                    $fabrica = new masaDelgada();
                    
                    break;
                default:
                    throw new \Exception("Opción ".$this->opcion." desconocida --Opciones disponibles:: opc 1: masaNormal -opc 2: masaDelgada ");

            }
            //revisar bien esto
            for ($i = 0; $i < $this->num_masaNormal; $i++) {
                $masaNormal[$i] = $fabrica->creaPizzaNormal('Normal'. $i, 'Normal'. $i, 'extra'. $i, 'tomate'. $i );
            }
            for ($i = 0; $i < $this->num_masaDelgada; $i++) {
                $masaDelgada[$i] = $fabrica->creaPizzaDelgada('Delgada'. $i, 'Normal'. $i, 'extra'. $i, 'tomate'. $i);
            }

            
            $r = array("masaNormal" => $masaNormal,
                "masaDelgada" => $masaDelgada);
          
            $respuesta = array('Estado' => "success",
                'Response' => $r);
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array('Estado' => "Error",
                'Response' => $e->getMessage());
            return $respuesta;
        }
    }

}
