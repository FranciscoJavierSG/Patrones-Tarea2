<?php

namespace EjemploAbstractFactory;

use Exception;

require_once 'masaNormal.class.php';
require_once 'masaDelgada.class.php';

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
                    $fabrica = new masaNormal();
                    break;
                case 2:
                    $fabrica = new masaDelgada();
                    break;
                default:
                    throw new \Exception("Opción ".$this->opcion." desconocida --Opciones disponibles:: opc 1: masaNormal -opc 2: masaDelgada ");

            }

            
/*
            for ($i = 0; $i < $this->masaNormal; $i++) {
                $autos[$i] = $fabrica->elegirParametroNormal('SUV_N'. $i, 'amarillo', 6 + $i, 3.2);
            }
            for ($i = 0; $i < $this->num_scooters; $i++) {
                $scooters[$i] = $fabrica->elegirParametroDelgada('clasico_N'. $i, 'rojo', 2 + $i);
            }
*/

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
