<?php

namespace models;

/**
 * Cliente
 */

class Cliente {
    public $nombre;
    public $direccion;

    /**
     * __construct
     *
     * @param mixed $nombre
     * @param mixed $direccion
     * @return void
     */

    public function __construct($nombre, $direccion) {
        $this->nombre = $nombre;
        $this->direccion = $direccion;
    }
    public function getNombre() {
        return $this->nombre;
    }
    public function getDireccion() {
        return $this->direccion;
    }

    /**
     * mostrar
     *
     * @return void
     */
    public function mostrar() {
        return json_encode(
            array(
                'Nombre' => $this->nombre,
                'Direccion' => $this->direccion
            ),
            JSON_PRETTY_PRINT
        );
    }
}
