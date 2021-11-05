<?php


use Exception;
//AL FINAL COMENTEN TODO Y PUEDEN USAR LA API QUE ESTA AL FINAL EL CODIGO
//SOLO HAY QUE COPIAR HTACCESS QUE ESTA EN LA CARPETA DE API DEL PROFE
//ACA ESTA EN MODELS
require_once 'models/fabricaPizza.php';
require_once 'models/masaDelgada.php';
require_once 'models/masaNormal.php';
require_once 'models/pizza.php';
require_once 'models/pizzaDelgada.php';
require_once 'models/pizzaNormal.php';

require_once 'models/cliente.php';
require_once 'models/clienteCredito.php';
require_once 'models/clienteEfectivo.php';
require_once 'models/estadoPedido.php';
require_once 'models/pedido.php';
require_once 'models/pedidoCredito.php';
require_once 'models/pedidoEfectivo.php';

use models\FabricaPizza;
use models\MasaDelgada;
use models\MasaNormal;
use models\Pizza;
use models\PizzaDelgada;
use models\PizzaNormal;
use models\Cliente;
use models\ClienteCredito;
use models\ClienteEfectivo;
use models\EstadoPedido;
use models\Pedido;
use models\PedidoCredito;
use models\PedidoEfectivo;


/*
//ACA ESTA PARA LA OTRA CARPETA (PATRONES)
require_once 'patrones/AbstractFactory/models/fabricaPizza.class.php';
require_once 'patrones/AbstractFactory/models/masaDelgada.class.php';
require_once 'patrones/AbstractFactory/models/masaNormal.class.php';
require_once 'patrones/AbstractFactory/models/pizza.class.php';
require_once 'patrones/AbstractFactory/models/pizzaDelgada.class.php';
require_once 'patrones/AbstractFactory/models/pizzaNormal.class.php';


require_once 'patrones/FactoryMethod/models/cliente.class.php';
require_once 'patrones/FactoryMethod/models/clienteCredito.class.php';
require_once 'patrones/FactoryMethod/models/clienteEfectivo.class.php';
require_once 'patrones/FactoryMethod/models/estadoPedido.class.php';
require_once 'patrones/FactoryMethod/models/pedido.class.php';
require_once 'patrones/FactoryMethod/models/pedidoCredito.class.php';
require_once 'patrones/FactoryMethod/models/pedidoEfectivo.class.php';

use patrones\AbstractFactory\models\FabricaPizza;
use patrones\AbstractFactory\models\masaDelgada;
use patrones\AbstractFactory\models\masaNormal;
use patrones\AbstractFactory\models\Pizza;
use patrones\AbstractFactory\models\PizzaDelgada;
use patrones\AbstractFactory\models\PizzaNormal;

use patrones\FactoryMethod\models\Cliente;
use patrones\FactoryMethod\models\ClienteCredito;
use patrones\FactoryMethod\models\ClienteEfectivo;
use patrones\FactoryMethod\models\EstadoPedido;
use patrones\FactoryMethod\models\Pedido;
use patrones\FactoryMethod\models\PedidoCredito;
use patrones\FactoryMethod\models\PedidoEfectivo;*/

//nueva pizza normal
$opcion=1;
echo'nalgas';
try{
    switch($opcion){
        case 1:
            $fabrica = new masaNormal();
            break;
        case 2:
            $fabrica = new masaDelgada();
            break;
        default:
        throw new \Exception("Opción ".$this->opcion." desconocida --Opciones disponibles:: opc 1: FabricaVehiculosElectricos -opc 2: FabricaVehiculoGasolina ");
    }
    $pizzaDelgada = $fabrica ->creaPizzaDelgada('Delgada','XL','extra','tomate');
    $pizzaNormal = $fabrica ->creaPizzaNormal('Normal','S','extra','tomate');

}catch (Exception $e) {
        echo 'ta malo';
    }
echo'ESTA PIZZA ES NORMAL';
echo$pizzaNormal;
echo 'ESTA PIZZA ES DELGADA';
echo$pizzaDelgada;

?>
<?php/*
    require_once "api/api.php";
    $apiPatrones = new apiPatrones();
    $apiPatrones->api();*/
?>