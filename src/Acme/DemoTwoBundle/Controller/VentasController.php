<?php

namespace Acme\DemoTwoBundle\Controller;

use Acme\DemoTwoBundle\Entity\Pedido;
use Acme\DemoTwoBundle\Entity\Repuesto;
use Acme\DemoTwoBundle\Entity\Transaccion;
use Acme\DemoTwoBundle\Entity\PedidoTemporal;
use Acme\DemoTwoBundle\Entity\PedidoRepuestos;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VentasController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoTwoBundle:Ventas:index.html.twig');
    }

    public function cargarPedidoTemporalAction()
    {        
       /* $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:PedidoTemporal');
        $query = $repository->createQueryBuilder('p')
        ->select('p.id')
        ->getQuery();
        $datoRepuestosPedidoTemporal = $query->getResult();
        $i = 0;
        $j = 0;
        foreach($datoRepuestosPedidoTemporal as $repuestoPedidoTemporal)
        {
            $id[$i] = $repuestoPedidoTemporal['id'];
            $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Repuesto');
            $query = $repository->createQueryBuilder('r')
            ->select('r.nombre')
            ->where('r.id = :idRepuesto')
            ->setParameter('idRepuesto', 58)
            ->getQuery();
            $repuesto = $query->getResult();
            foreach($repuesto as $datoRepuesto)
            {
                $nombre[$j] = $datoRepuesto['nombre'];
                $j++;
            }
            $i++;

        }
        */
            $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Repuesto');
            $query = $repository->createQueryBuilder('c')
            ->innerJoin('AcmeDemoTwoBundle:PedidoTemporal', 'co', 'WITH', 'co.idRepuesto = c.id')
            ->select('c.codigo')
            ->addSelect('c.nombre')
            ->addSelect('c.id')
            ->addSelect('c.categoria')
            ->addSelect('c.precioVenta')
            ->addSelect('co.cantidad')
            ->getQuery();
            $pedidoTemporal = $query->getResult();
        $template = $this->renderView('AcmeDemoTwoBundle:Ventas:resultadoBusquedaVentas.html.twig', array('repuestos' => $pedidoTemporal, 'busqueda' => false));
        return new Response($template);


    }
    public function eliminarRepuestoPedidoTemporalAction($idRepuesto)
    {
        $verificacionRepuesto = $this->getDoctrine()
        ->getRepository('AcmeDemoTwoBundle:PedidoTemporal')
        ->findOneByIdRepuesto($idRepuesto);
        if($verificacionRepuesto == null)
        {
            return new Response("El codigo del repuesto que desea agregar ya no existe en la tabla de pedidos temporales.");
        }
        else
        {
            //Eliminar repuesto en PedidoTemporal
            $em = $this->getDoctrine()->getManager();
            $em->remove($verificacionRepuesto);
            $em->flush();
        }

            return $this->render('AcmeDemoTwoBundle:Ventas:index.html.twig', array('alert' => "Producto borrado del pedido con exito.", 'busqueda' => false));  
    }


    public function finalizarPedidoAction()
    {
            $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:PedidoTemporal');
            $query = $repository->createQueryBuilder('c')
            ->getQuery();
            $pedidoTemporal = $query->getResult();
            if($pedidoTemporal == null)
            {
            return $this->render('AcmeDemoTwoBundle:Ventas:index.html.twig', array('alert' => "Error: Debe añadir algun producto a la lista para poder venderlo.", 'busqueda' => false));  
            }
            foreach($pedidoTemporal as $pedidoRepuesto)
            {
                $idPedidoTemporal = $pedidoRepuesto->getId();    // conseguimos ID de pedido temporal para borrarlo despues
                $repuestoPedidoTemporal = $this->getDoctrine()
                ->getRepository('AcmeDemoTwoBundle:PedidoTemporal')
                ->find($idPedidoTemporal);                      // seleccionamos el pedido temporal en base a su ID para borrarlo
                $idPedido = $pedidoRepuesto->getIdPedido();
                $idRepuesto = $pedidoRepuesto->getIdRepuesto();
                $cantidad = $pedidoRepuesto->getCantidad();     // juntamos datos de idPedido idRepuesto y cantidad para setear en db
                
                //Cargando lista de repuestos de pedido (la definitiva para ver la transaccion)
                $nPedidoTemporal = new PedidoRepuestos();
                $nPedidoTemporal->setIdPedido($idPedido);
                $nPedidoTemporal->setIdRepuesto($idRepuesto);
                $nPedidoTemporal->setCantidad($cantidad);


                // empieza a actualizarse la db
                $em = $this->getDoctrine()->getManager();
                $em->persist($nPedidoTemporal);                 // agrega los repuestos de la lista temporal a la definitiva
                $em->remove($repuestoPedidoTemporal);           // borra los repuestos de la lista temporal    
                $repuesto = $this->getDoctrine()
                ->getRepository('AcmeDemoTwoBundle:Repuesto')
                ->findOneById($idRepuesto);
                if($repuesto == NULL)
                {
                    return $this->render('AcmeDemoTwoBundle:Ventas:index.html.twig', array('alert' => "Error: el repuesto no existe, null $idRepuesto", 'busqueda' => false));  
                }
                $viejaCantidad = $repuesto->getCantidad();
                $stockActualizado = ($viejaCantidad - $cantidad);     
                $repuesto->setCantidad($stockActualizado);
                $em->flush();
            }
            $pedido = $this->getDoctrine()
            ->getRepository('AcmeDemoTwoBundle:Pedido')
            ->find($idPedido);
            $pedido->setPedidoFinalizado(1);                    // finaliza el pedido para poder comenzar uno nuevo
            $em->flush();


            return $this->render('AcmeDemoTwoBundle:Ventas:index.html.twig', array('alert' => "Venta realizada con exito", 'busqueda' => false));  

    }
    public function repuestoPedidoTemporalAction(Request $request)
    {
        //obtener datos de request
        $idRepuesto = $request->request->get('idRepuesto');
        $cantidad = $request->request->get('cantidad');
        $repuesto = $this->getDoctrine()
        ->getRepository('AcmeDemoTwoBundle:Repuesto')
        ->findOneById($idRepuesto);
        if(!$repuesto) // verificar si existe repuesto
        {
            throw $this->createNotFoundException('El producto que desea modificar no existe.');

        }
        if($repuesto->getCantidad() >= $cantidad && $cantidad > 0)
        {

            //Si existe repuesto, verifica si crear o no pedido
            //dependiendo de si esta o no finalizado el ultimo
            $repository = $this->getDoctrine()
            ->getRepository('AcmeDemoTwoBundle:Pedido');
            $query = $repository->createQueryBuilder('p')
            ->add('select', 'p.id, p.pedidoFinalizado')
            ->add('orderBy', 'p.id DESC')
            ->setMaxResults(1)
            ->getQuery();
            $pedido = $query->getResult();
            if( $pedido != null)
            {
                $pedidoFinalizado = $pedido[0]['pedidoFinalizado'];
                $idPedido = $pedido[0]['id'];

            }
            else
            {
                $pedidoFinalizado = true;
            }
            if($pedidoFinalizado == true) // si el ultimo pedido esta finalizado inicia uno nuevo
            {
                //eliminando buffer de pedidos
                $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:PedidoTemporal');
                $query = $repository->createQueryBuilder('p')
                ->delete()
                ->getQuery();
                $repuesto = $query->getResult();

                //buffer de pedidos vacio; crear nueva transaccion y nuevo pedido
                $transaccion = new Transaccion();

                //Obtener valores de transaccion
                $tipoTransaccion = 4;
                $fechaTransaccion = new \DateTime("now");
                $user = $this->getUser();
                $encargado = $user->getUsername();

                //Carga de transaccion Doctrine
                $transaccion->setTipoTransaccion($tipoTransaccion);
                $transaccion->setFechaTransaccion($fechaTransaccion);
                $transaccion->setEncargado($encargado);
                $em = $this->getDoctrine()->getManager();
                $em->persist($transaccion);
                $em->flush();
                $lastIdTransaccion = $transaccion->getId();

                //Nuevo pedido
                $pedido = new Pedido();
                $pedido->setIdTransaccion($lastIdTransaccion);
                $pedido->setPedidoFinalizado(0);

                $em->persist($pedido);
                $em->flush();
                $lastIdPedido = $pedido->getId();

                //Nuevo repuesto en PedidoTemporal
                $nPedidoTemporal = new PedidoTemporal();
                $nPedidoTemporal->setIdPedido($lastIdPedido);
                $nPedidoTemporal->setIdRepuesto($idRepuesto);
                $nPedidoTemporal->setCantidad($cantidad);
                $em->persist($nPedidoTemporal);
                $em->flush();
            }
            else
            {

                 $verificacionRepuesto = $this->getDoctrine()
                ->getRepository('AcmeDemoTwoBundle:PedidoTemporal')
                ->findOneByIdRepuesto($idRepuesto);
                if($verificacionRepuesto != null)
                {
                    $template = $this->renderView('AcmeDemoTwoBundle:Ventas:resultadoBusquedaVentas.html.twig', array('alert' => "Producto agregado al pedido con exito.", 'busqueda' => false, 'alert' => "El codigo de repuesto que desea agregar ya se encuentra almacenado en el buffer de pedidos."));
                    return new Response($template);
                }
                else
                {
                    //Nuevo repuesto en PedidoTemporal
                    $nPedidoTemporal = new PedidoTemporal();
                    $nPedidoTemporal->setIdPedido($idPedido);
                    $nPedidoTemporal->setIdRepuesto($idRepuesto);
                    $nPedidoTemporal->setCantidad($cantidad);
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($nPedidoTemporal);
                    $em->flush();
                }

            }

            $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Repuesto');
            $query = $repository->createQueryBuilder('c')
            ->innerJoin('AcmeDemoTwoBundle:PedidoTemporal', 'co', 'WITH', 'co.idRepuesto = c.id')
            ->select('c.codigo')
            ->addSelect('c.nombre')
            ->addSelect('c.precioCompra')
            ->addSelect('c.id')
            ->addSelect('c.categoria')
            ->addSelect('c.precioVenta')
            ->addSelect('co.cantidad')
            ->getQuery();
            $repuestos = $query->getResult();
            $template = $this->renderView('AcmeDemoTwoBundle:Ventas:resultadoBusquedaVentas.html.twig', array('repuestos' => $repuestos, 'alert' => "Producto agregado al pedido con exito.", 'busqueda' => false));
            return new Response($template);

        }
        else
        {
            $varTest = new Response("cadena de texto");

            $template = $this->renderView('AcmeDemoTwoBundle:Ventas:resultadoBusquedaVentas.html.twig', array('alert' => "Error: La cantidad de stock ingresado es invalida."));
            return new Response($template);
            //return new Response("No hay suficiente stock del producto para vender esta cantidad");
        }

    }
    public function testViewAction()
    {
        return $this->render('AcmeDemoTwoBundle:Ventas:test.html.twig');

    }
    public function testAction(Request $request)
    {        
        $request  = $this->get('request');
        $repuestoNombre = $request->request->get('productValue');
        $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Repuesto');
        $query = $repository->createQueryBuilder('p')
        ->where('p.nombre LIKE :nombre')
        ->orWhere('p.codigo LIKE :nombre')
        ->setParameter('nombre', '%'.$repuestoNombre.'%')
        ->getQuery();
        $repuesto = $query->getResult();
        $template = $this->renderView('AcmeDemoTwoBundle:Ventas:resultadoBusquedaVentas.html.twig', array('repuestos' => $repuesto, 'busqueda' => true));
        return new Response($template);
    }
}