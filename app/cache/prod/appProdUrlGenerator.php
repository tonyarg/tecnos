<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes = array(
        'tecnos_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\HomeController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\DefaultController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/test/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\HomeController::homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_transacciones' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\TransaccionesController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/transacciones/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_transacciones_semanales' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\TransaccionesController::movimientoSemanalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/transacciones/semanales/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_transacciones_ver' => array (  0 =>   array (    0 => 'tipoTransaccion',    1 => 'idTransaccion',  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\TransaccionesController::verAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idTransaccion',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'tipoTransaccion',    ),    2 =>     array (      0 => 'text',      1 => '/transacciones/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/repuestos/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_agregar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::agregarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/repuestos/agregar/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_buscar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::buscarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/repuestos/buscar/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_busquedaAvanzada' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::buscarAvanzadoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/repuestos/buscar/avanzado/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_agregar_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::agregarCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/repuestos/agregar/check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_lista' => array (  0 =>   array (    0 => 'actionResponse',  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::verAction',    'actionResponse' => '= null',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'actionResponse',    ),    1 =>     array (      0 => 'text',      1 => '/repuestos/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_modificar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::modifyByIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/repuestos/modificar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_vender' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::agregarRepuestoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/repuestos/vender/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_verById' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::seeByIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/repuestos/ver',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_ventas_test' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::testViewAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas/test/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_ventas_test_ajax' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::testAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas/test/ajax/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_ventas_cargar_pedido_temporal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::cargarPedidoTemporalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas/cargar/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_ventas_finalizar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::FinalizarPedidoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas/finalizar/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_ventas_pedido_temporal' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::repuestoPedidoTemporalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas/pedido/temporal/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_ventas_pedido_borrar' => array (  0 =>   array (    0 => 'idRepuesto',  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::eliminarRepuestoPedidoTemporalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'idRepuesto',    ),    1 =>     array (      0 => 'text',      1 => '/ventas/pedido/borrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_repuestos_borrar' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/repuestos/borrar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tecnos_ventas' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'my_app_greeting' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::buscarRepuestoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas/buscarRepuesto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog' => array (  0 =>   array (    0 => 'entry',  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\DefaultController::blogAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'entry',    ),    1 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'login_check' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'admin' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoTwoBundle\\Controller\\AdminController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/admin/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
