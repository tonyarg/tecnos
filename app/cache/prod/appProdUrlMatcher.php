<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // tecnos_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tecnos_index');
            }

            return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\HomeController::loginAction',  '_route' => 'tecnos_index',);
        }

        // tecnos_test
        if (rtrim($pathinfo, '/') === '/test') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tecnos_test');
            }

            return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\DefaultController::testAction',  '_route' => 'tecnos_test',);
        }

        // tecnos_home
        if (rtrim($pathinfo, '/') === '/home') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tecnos_home');
            }

            return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\HomeController::homeAction',  '_route' => 'tecnos_home',);
        }

        if (0 === strpos($pathinfo, '/transacciones')) {
            // tecnos_transacciones
            if (rtrim($pathinfo, '/') === '/transacciones') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tecnos_transacciones');
                }

                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\TransaccionesController::indexAction',  '_route' => 'tecnos_transacciones',);
            }

            // tecnos_transacciones_semanales
            if (rtrim($pathinfo, '/') === '/transacciones/semanales') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tecnos_transacciones_semanales');
                }

                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\TransaccionesController::movimientoSemanalAction',  '_route' => 'tecnos_transacciones_semanales',);
            }

            // tecnos_transacciones_ver
            if (0 === strpos($pathinfo, '/transacciones/ver') && preg_match('#^/transacciones/ver/(?P<tipoTransaccion>[^/]++)/(?P<idTransaccion>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnos_transacciones_ver')), array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\TransaccionesController::verAction',));
            }

        }

        if (0 === strpos($pathinfo, '/repuestos')) {
            // tecnos_repuestos_index
            if (rtrim($pathinfo, '/') === '/repuestos') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tecnos_repuestos_index');
                }

                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::indexAction',  '_route' => 'tecnos_repuestos_index',);
            }

            // tecnos_repuestos_agregar
            if (rtrim($pathinfo, '/') === '/repuestos/agregar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tecnos_repuestos_agregar');
                }

                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::agregarAction',  '_route' => 'tecnos_repuestos_agregar',);
            }

            if (0 === strpos($pathinfo, '/repuestos/buscar')) {
                // tecnos_repuestos_buscar
                if (rtrim($pathinfo, '/') === '/repuestos/buscar') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tecnos_repuestos_buscar');
                    }

                    return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::buscarAction',  '_route' => 'tecnos_repuestos_buscar',);
                }

                // tecnos_repuestos_busquedaAvanzada
                if (rtrim($pathinfo, '/') === '/repuestos/buscar/avanzado') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tecnos_repuestos_busquedaAvanzada');
                    }

                    return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::buscarAvanzadoAction',  '_route' => 'tecnos_repuestos_busquedaAvanzada',);
                }

            }

            // tecnos_repuestos_agregar_check
            if ($pathinfo === '/repuestos/agregar/check') {
                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::agregarCheckAction',  '_route' => 'tecnos_repuestos_agregar_check',);
            }

            // tecnos_repuestos_lista
            if (0 === strpos($pathinfo, '/repuestos/ver') && preg_match('#^/repuestos/ver(?:/(?P<actionResponse>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnos_repuestos_lista')), array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::verAction',  'actionResponse' => '= null',));
            }

            // tecnos_repuestos_modificar
            if (0 === strpos($pathinfo, '/repuestos/modificar') && preg_match('#^/repuestos/modificar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnos_repuestos_modificar')), array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::modifyByIdAction',));
            }

            if (0 === strpos($pathinfo, '/repuestos/ve')) {
                // tecnos_repuestos_vender
                if (rtrim($pathinfo, '/') === '/repuestos/vender') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tecnos_repuestos_vender');
                    }

                    return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::agregarRepuestoAction',  '_route' => 'tecnos_repuestos_vender',);
                }

                // tecnos_repuestos_verById
                if (0 === strpos($pathinfo, '/repuestos/ver') && preg_match('#^/repuestos/ver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnos_repuestos_verById')), array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::seeByIdAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/ventas')) {
            if (0 === strpos($pathinfo, '/ventas/test')) {
                // tecnos_ventas_test
                if (rtrim($pathinfo, '/') === '/ventas/test') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tecnos_ventas_test');
                    }

                    return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::testViewAction',  '_route' => 'tecnos_ventas_test',);
                }

                // tecnos_ventas_test_ajax
                if (rtrim($pathinfo, '/') === '/ventas/test/ajax') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tecnos_ventas_test_ajax');
                    }

                    return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::testAction',  '_route' => 'tecnos_ventas_test_ajax',);
                }

            }

            // tecnos_ventas_cargar_pedido_temporal
            if (rtrim($pathinfo, '/') === '/ventas/cargar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tecnos_ventas_cargar_pedido_temporal');
                }

                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::cargarPedidoTemporalAction',  '_route' => 'tecnos_ventas_cargar_pedido_temporal',);
            }

            // tecnos_ventas_finalizar
            if (rtrim($pathinfo, '/') === '/ventas/finalizar') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tecnos_ventas_finalizar');
                }

                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::FinalizarPedidoAction',  '_route' => 'tecnos_ventas_finalizar',);
            }

            if (0 === strpos($pathinfo, '/ventas/pedido')) {
                // tecnos_ventas_pedido_temporal
                if (rtrim($pathinfo, '/') === '/ventas/pedido/temporal') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'tecnos_ventas_pedido_temporal');
                    }

                    return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::repuestoPedidoTemporalAction',  '_route' => 'tecnos_ventas_pedido_temporal',);
                }

                // tecnos_ventas_pedido_borrar
                if (0 === strpos($pathinfo, '/ventas/pedido/borrar') && preg_match('#^/ventas/pedido/borrar/(?P<idRepuesto>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnos_ventas_pedido_borrar')), array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::eliminarRepuestoPedidoTemporalAction',));
                }

            }

        }

        // tecnos_repuestos_borrar
        if (0 === strpos($pathinfo, '/repuestos/borrar') && preg_match('#^/repuestos/borrar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tecnos_repuestos_borrar')), array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\RepuestosController::deleteAction',));
        }

        if (0 === strpos($pathinfo, '/ventas')) {
            // tecnos_ventas
            if (rtrim($pathinfo, '/') === '/ventas') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tecnos_ventas');
                }

                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::indexAction',  '_route' => 'tecnos_ventas',);
            }

            // my_app_greeting
            if ($pathinfo === '/ventas/buscarRepuesto') {
                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\VentasController::buscarRepuestoAction',  '_route' => 'my_app_greeting',);
            }

        }

        // blog
        if (0 === strpos($pathinfo, '/blog') && preg_match('#^/blog/(?P<entry>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog')), array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\DefaultController::blogAction',));
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if (rtrim($pathinfo, '/') === '/login') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'login');
                }

                return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ($pathinfo === '/login_check') {
                return array('_route' => 'login_check');
            }

        }

        // admin
        if (rtrim($pathinfo, '/') === '/admin') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'admin');
            }

            return array (  '_controller' => 'Acme\\DemoTwoBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
