<?php

namespace FactoryMethod;

use Exception;

require_once 'models\clienteCredito.class.php';
require_once 'models\clienteEfectivo.class.php';

class EjemploFactoryMethod
{
    public $opcion;
    public $monto;
    public $nombre;
    public $rut;
    public $correo;

    public function __construct($opcion, $monto, $nombre,$rut,$correo)
    {

        $this->opcion = $opcion;
        $this->monto = $monto;
        $this->nombre = $nombre;
        $this->rut = $rut;
        $this->correo = $correo;

    }

    public function generar()
    {
        try {

            switch ($this->opcion) {
                case 1:
                    $client = new ClienteEfectivo();
                    break;
                case 2:
                    $client = new ClienteCredito();
                    break;
                default:

                    throw new \Exception("Opción " . $this->opcion . " desconocida --Opciones disponibles:: opc 1: ClienteContado -opc 2: ClienteCredito ");

            }
            //podria ser algo asi
            $client->datoCliente($this->nombre,$this->rut,$this->correo);
            $client->nuevoPedido($this->monto);
            
            //$client->nuevoPedido($this->monto * $this->monto);

            $r1 = $client->datoCliente($this->nombre,$this->rut,$this->correo);
            $r = $client->getPedidos();

            $array = array($r,$r1);
            $respuesta = array('Estado' => "success",
                'Response' => $array
                );
            return $respuesta;
        } catch (Exception $e) {
            $respuesta = array('Estado' => "Error",
                'Response' => $e->getMessage());
            return $respuesta;
        }
    }

}
