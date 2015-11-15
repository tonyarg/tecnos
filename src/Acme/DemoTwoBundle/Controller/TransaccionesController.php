<?php

namespace Acme\DemoTwoBundle\Controller;

use Acme\DemoTwoBundle\Entity\Transaccion;
use Acme\DemoTwoBundle\Entity\ModificacionesRepuesto;
use Acme\DemoTwoBundle\Entity\Repuesto;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TransaccionesController extends Controller
{
    public function indexAction()
    {

        $data = new \DateTime("now");
        $date = $data->format('Y-m-d');
        $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Transaccion');
        $query = $repository->createQueryBuilder('p')
        ->where('p.fechaTransaccion LIKE :fecha')
        ->setParameter('fecha', '%'.$date.'%')
        ->orderBy('p.fechaTransaccion', 'DESC')
        ->getQuery();
        $transaccion = $query->getResult();

        return $this->render('AcmeDemoTwoBundle:Transacciones:index.html.twig', array('transacciones' => $transaccion));
    }
    public function movimientoSemanalAction()
    {
        $lastWeek  = mktime(0, 0, 0, date("m")  , date("d")-7, date("Y"));
        $data = new \DateTime();
        $data->setTimestamp($lastWeek);
        $date = $data->format('Y-m-d');
        $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Transaccion');
        $query = $repository->createQueryBuilder('p')
        ->where('p.fechaTransaccion > :fecha')
        ->setParameter('fecha', '%'.$date.'%')
        ->orderBy('p.fechaTransaccion', 'DESC')
        ->getQuery();
        $transaccion = $query->getResult();

        return $this->render('AcmeDemoTwoBundle:Transacciones:movimientoSemanal.html.twig', array('transacciones' => $transaccion));
    }

    public function verAction($tipoTransaccion , $idTransaccion)
    {
        if($tipoTransaccion == 0) //Agregar repuesto
        {
             $repuesto = $this->getDoctrine()
            ->getRepository('AcmeDemoTwoBundle:Repuesto')
            ->findOneByIdTransaccion($idTransaccion);
            return $this->render('AcmeDemoTwoBundle:Transacciones:agregarRepuestoView.html.twig', array('repuesto' => $repuesto));
        }

        if($tipoTransaccion == 1) //Modificar repuesto
        {
             $repuesto = $this->getDoctrine()
            ->getRepository('AcmeDemoTwoBundle:ModificacionesRepuesto')
            ->findOneByIdTransaccion($idTransaccion); 

            return $this->render('AcmeDemoTwoBundle:Transacciones:modificarRepuestoView.html.twig', array('repuesto' => $repuesto));
        }

        if($tipoTransaccion == 2) //Borrar repuesto
        {
             $repuesto = $this->getDoctrine()
            ->getRepository('AcmeDemoTwoBundle:RepuestoBorrado')
            ->findOneByIdTransaccion($idTransaccion); 

            return $this->render('AcmeDemoTwoBundle:Transacciones:borrarRepuestoView.html.twig', array('repuesto' => $repuesto));
        }

        if($tipoTransaccion == 3) //Agregar cliente
        {
             $repuesto = $this->getDoctrine()
            ->getRepository('AcmeDemoTwoBundle:ModificacionesRepuesto')
            ->findOneByIdTransaccion($idTransaccion); 

            return $this->render('AcmeDemoTwoBundle:Transacciones:modificarRepuestoView.html.twig', array('repuesto' => $repuesto));
        }

        if($tipoTransaccion == 4) //Realizar venta
        {
             $pedido = $this->getDoctrine()
            ->getRepository('AcmeDemoTwoBundle:Pedido')
            ->findOneByIdTransaccion($idTransaccion);
            $idPedido = $pedido->getId();

            $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Repuesto');
            $query = $repository->createQueryBuilder('c')
            ->innerJoin('AcmeDemoTwoBundle:PedidoRepuestos', 'co', 'WITH', 'co.idRepuesto = c.id')
            ->select('c.codigo')
            ->addSelect('c.nombre')
            ->addSelect('c.id')
            ->addSelect('c.categoria')
            ->addSelect('c.precioVenta')
            ->addSelect('co.cantidad')
            ->where('co.idPedido LIKE :idPedido')
            ->setParameter('idPedido', $idPedido)
            ->getQuery();
            $pedidoTemporal = $query->getResult(); 

            return $this->render('AcmeDemoTwoBundle:Transacciones:ventaRealizada.html.twig', array('repuestos' => $pedidoTemporal, 'busqueda' => false));
        }

            throw $this->createNotFoundException('No se pudo realizar la consulta solicitada.');


    }
}
