<?php

namespace factory_method;

class EstadoPedido {

    public static function setEstado($estado) {
        if ($estado <= 1 || $estado > 5) {
            return 'Nuevo pedido';
        }
        if ($estado == 2) {
            return 'Preparando pedido';
        }
        if ($estado == 3) {
            return 'Por pagar';
        }
        if ($estado == 4) {
            return 'Pagado';
        }
        if ($estado == 5) {
            return 'Entregado';
        }
    }
}
