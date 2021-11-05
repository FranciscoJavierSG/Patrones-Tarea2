<?php

namespace factory_method;

class EstadoPedido {

    public static function setEstado($estado) {
        if ($estado <= 1 || $estado > 5) {
            return 'Pendiente';
        }
        if ($estado == 2) {
            return 'Pagado';
        }
        if ($estado == 3) {
            return 'Procesado';
        }
        if ($estado == 4) {
            return 'Enviado';
        }
        if ($estado == 5) {
            return 'Entregado';
        }
    }
}
