<?php

namespace Acme\DemoTwoBundle\Controller;

use Acme\DemoTwoBundle\Entity\Repuesto;
use Acme\DemoTwoBundle\Entity\Transaccion;
use Acme\DemoTwoBundle\Entity\ModificacionesRepuesto;
use Acme\DemoTwoBundle\Entity\RepuestoBorrado;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\User\User;
use Symfony\Component\Validator\Constraints\NotBlank;

class RepuestosController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoTwoBundle:Repuestos:index.html.twig');
    }

    public function agregarAction(Request $request)
    {
    
    //Fin Transaccion

    //Agregar repuesto

        //Se obtienen los datos del formulario

        $repuesto = new Repuesto();


        $form = $this->createFormBuilder($repuesto)
            ->add('codigo', 'text', array('label' => 'Codigo', 'constraints' => new NotBlank()))
            ->add('nombre', 'text', array('label' => 'Nombre', 'constraints' => new NotBlank()))
            ->add('precioCompra', 'money', array('label' => 'Precio costo', 'currency' => 'USD', 'constraints' => new NotBlank()))
            ->add('porcentajeGanancia', 'integer', array('label' => '% Ganancia', 'constraints' => new NotBlank()))
            ->add('cantidad', 'integer', array('label' => 'Stock inicial', 'constraints' => new NotBlank()))
            ->add('categoria', 'choice', array('choices' => array('0' => 'lavarropa', '1' => 'lavavajilla', '2' => 'aire acondicionado', '3' => 'cocina', '4' => 'microondas', '5' => 'heladera', '6' => 'secarropa', '7' => 'Pequeño electrodomestico', '8' => 'horno', '9' => 'anafe', '10' => 'freezer', '11' => 'purificador de aire', '12' => 'termotanque', '13' => 'calefon'), 'label' => 'Categoria', 'constraints' => new NotBlank()))
            ->add('save', 'submit', array('label' => 'Agregar repuesto'))
            ->getForm();
        $form->handleRequest($request);

        if($form->isValid())
        {

            $codigo = $form->get('codigo')->getData();
             $verificacionRepuesto = $this->getDoctrine()
            ->getRepository('AcmeDemoTwoBundle:Repuesto')
            ->findOneByCodigo($codigo);
            if($verificacionRepuesto != null)
            {
            throw $this->createNotFoundException('El codigo del repuesto que desea agregar ya se encuentra almacenado.');
            }

            //Nueva transaccion
            $transaccion = new Transaccion();

            //Obtener valores de transaccion
            $tipoTransaccion = 0;
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
            $lastId = $transaccion->getId();

            //Obteniendo datos formulario en variables
            $nombre = $form->get('nombre')->getData();
            $precioCompra = $form->get('precioCompra')->getData();
            $porcentajeGanancia = $form->get('porcentajeGanancia')->getData();
            $cantidad = $form->get('cantidad')->getData();
            $categoria = $form->get('categoria')->getData();
            $idTransaccion = $lastId;
            //determinar valor precioVenta
            $iva = ($precioCompra * 21) / 100;
            $ganancia = (($precioCompra + $iva) * $porcentajeGanancia) / 100;
            $precioVenta = $precioCompra + $iva + $ganancia;
            
            //agregando datos al objeto repuestos
            $repuesto->setNombre($nombre);
            $repuesto->setCodigo($codigo);
            $repuesto->setPrecioCompra($precioCompra);
            $repuesto->setPorcentajeGanancia($porcentajeGanancia);
            $repuesto->setPrecioVenta($precioVenta);
            $repuesto->setCantidad($cantidad);
            $repuesto->setCategoria($categoria);
            $repuesto->setIdTransaccion($idTransaccion);
            $em = $this->getDoctrine()->getManager();
            $em->persist($repuesto);
            $em->flush();

        return $this->render('AcmeDemoTwoBundle:Repuestos:agregar.html.twig', array('form' => $form->createView(), 'success' => 'Repuesto agregado con exito!'));
        }

        return $this->render('AcmeDemoTwoBundle:Repuestos:agregar.html.twig', array('form' => $form->createView()));
    
    }

    public function modifyByIdAction($id, Request $request)
    {
        $repuesto = $this->getDoctrine()
        ->getRepository('AcmeDemoTwoBundle:Repuesto')
        ->find($id);
        if(!$repuesto)
        {
            throw $this->createNotFoundException('El producto que desea modificar no existe.');

        }
        $codigoAntiguo = $repuesto->getCodigo();
        $nombreAntiguo = $repuesto->getNombre();
        $precioCompraAntiguo = $repuesto->getPrecioCompra();
        $precioVentaAntiguo = $repuesto->getPrecioVenta();
        $porcentajeGananciaAntiguo = $repuesto->getPorcentajeGanancia();
        $cantidadAntiguo = $repuesto->getCantidad();
        $categoriaAntiguo = $repuesto->getCategoria();

        $form = $this->createFormBuilder($repuesto)
            ->add('codigo', 'text', array('label' => 'Codigo', 'constraints' => new NotBlank()))
            ->add('nombre', 'text', array('label' => 'Nombre', 'constraints' => new NotBlank()))
            ->add('precioCompra', 'money', array('label' => 'Precio costo', 'currency' => 'USD', 'constraints' => new NotBlank()))
            ->add('porcentajeGanancia', 'integer', array('label' => '% Ganancia', 'constraints' => new NotBlank()))
            ->add('cantidad', 'integer', array('label' => 'Stock inicial', 'constraints' => new NotBlank()))
            ->add('categoria', 'choice', array('choices' => array('0' => 'lavarropa', '1' => 'lavavajilla', '2' => 'aire acondicionado', '3' => 'cocina', '4' => 'microondas') , 'label' => 'Categoria', 'constraints' => new NotBlank()))
            ->add('save', 'submit', array('label' => 'Modificar repuesto'))
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid())
        {
           //Nueva transaccion
            $transaccion = new Transaccion();

            //Obtener valores de transaccion
            $tipoTransaccion = 1;
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
            $lastId = $transaccion->getId();

            //Obteniendo datos formulario en variables
            $nombre = $form->get('nombre')->getData();
            $codigo = $form->get('codigo')->getData();
            $precioCompra = $form->get('precioCompra')->getData();
            $iva = ($precioCompra * 21) / 100;
            $porcentajeGanancia = $form->get('porcentajeGanancia')->getData();
            $ganancia = (($precioCompra + $iva) * $porcentajeGanancia) / 100;
            $precioVenta = $precioCompra + $iva + $ganancia;
            $cantidad = $form->get('cantidad')->getData();
            $categoria = $form->get('categoria')->getData();
            $idTransaccion = $lastId;

            //cargando datos de modificacion en el historial de transacciones
            $modificacionesRepuesto = new ModificacionesRepuesto();
            $modificacionesRepuesto->setIdTransaccion($idTransaccion);
            $modificacionesRepuesto->setCodigoAntiguo($codigoAntiguo);
            $modificacionesRepuesto->setCodigoNuevo($codigo);
            $modificacionesRepuesto->setNombreAntiguo($nombreAntiguo);
            $modificacionesRepuesto->setNombreNuevo($nombre);
            $modificacionesRepuesto->setPrecioCompraAntiguo($precioCompraAntiguo);
            $modificacionesRepuesto->setPrecioCompraNuevo($precioCompra);
            $modificacionesRepuesto->setPrecioVentaAntiguo($precioVentaAntiguo);
            $modificacionesRepuesto->setPrecioVentaNuevo($precioVenta);
            $modificacionesRepuesto->setPorcentajeGananciaAntiguo($porcentajeGananciaAntiguo);
            $modificacionesRepuesto->setPorcentajeGananciaNuevo($porcentajeGanancia);
            $modificacionesRepuesto->setCantidadAntiguo($cantidadAntiguo);
            $modificacionesRepuesto->setCantidadNuevo($cantidad);
            $modificacionesRepuesto->setCategoriaAntiguo($categoriaAntiguo);
            $modificacionesRepuesto->setCategoriaNuevo($categoria);
            $em->persist($modificacionesRepuesto);
            $em->flush();

            //modificacion de datos repuesto
            $repuesto->setNombre($nombre);
            $repuesto->setCodigo($codigo);
            $repuesto->setPrecioCompra($precioCompra);
            $repuesto->setPorcentajeGanancia($porcentajeGanancia);
            $repuesto->setPrecioVenta($precioVenta);
            $repuesto->setCantidad($cantidad);
            $repuesto->setCategoria($categoria);
            $em = $this->getDoctrine()->getManager();
            $em->flush();
        }

        return $this->render('AcmeDemoTwoBundle:Repuestos:modificarRepuesto.html.twig', array('form' => $form->createView()));
    }

    public function deleteAction($id, Request $request)
    {
        $repuesto = $this->getDoctrine()
        ->getRepository('AcmeDemoTwoBundle:Repuesto')
        ->find($id);
        if(!$repuesto)
        {
            throw $this->createNotFoundException('El repuesto que desea modificar no existe.');

        }
        $form = $this->createFormBuilder()
        ->add('save','submit', array('label' => 'Borrar repuesto'))
        ->add('id','hidden')
        ->getForm();
        $form->handleRequest($request);

        if($form->isValid())
        {
           //Nueva transaccion
            $transaccion = new Transaccion();

            //Obtener valores de transaccion
            $tipoTransaccion = 2;
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
            $lastId = $transaccion->getId();

            //Carga de repuesto borrado
            $repuestoBorrado = new RepuestoBorrado();

            $codigo = $repuesto->getCodigo();
            $nombre = $repuesto->getNombre();
            $precioCompra = $repuesto->getPrecioCompra();
            $precioVenta = $repuesto->getPrecioVenta();
            $porcentajeGanancia = $repuesto->getPorcentajeGanancia();
            $cantidad = $repuesto->getCantidad();
            $categoria = $repuesto->getCategoria();

            $repuestoBorrado->setCodigo($codigo);
            $repuestoBorrado->setNombre($nombre);
            $repuestoBorrado->setPrecioCompra($precioCompra);
            $repuestoBorrado->setPrecioVenta($precioVenta);
            $repuestoBorrado->setPorcentajeGanancia($porcentajeGanancia);
            $repuestoBorrado->setCantidad($cantidad);
            $repuestoBorrado->setCategoria($categoria);
            $idTransaccion = $lastId;
            $repuestoBorrado->setIdTransaccion($idTransaccion);
            $em->persist($repuestoBorrado);
            $em->remove($repuesto);
            $em->flush();
            return $this->redirect($this->generateUrl('tecnos_repuestos_lista', array('removeSuccess' => true)));
        }

        return $this->render('AcmeDemoTwoBundle:Repuestos:borrar.html.twig', array('repuesto' => $repuesto, 'form' => $form->createView()));
    }

    public function verAction()
    {
        $repuesto = $this->getDoctrine()
        ->getRepository('AcmeDemoTwoBundle:Repuesto')
        ->findAll();
        if(!$repuesto)
        {
            throw $this->createNotFoundException('El repuesto que desea borrar no existe');
        }
        return $this->render('AcmeDemoTwoBundle:Repuestos:listaRepuestos.html.twig', array('repuestos' => $repuesto));

    }

    public function buscarAction(Request $request)
    {
        $repuestoNombre = $request->request->get('repuestoNombre');
        $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Repuesto');
        $query = $repository->createQueryBuilder('p')
        ->where('p.nombre LIKE :nombre')
        ->orWhere('p.codigo LIKE :nombre')
        ->setParameter('nombre', '%'.$repuestoNombre.'%')
        ->getQuery();
        $repuesto = $query->getResult();
        return $this->render('AcmeDemoTwoBundle:Repuestos:busqueda.html.twig', array('repuestos' => $repuesto));
    }

    public function buscarAvanzadoAction(Request $request)
    {
        $form = $this->createFormBuilder()
            ->add('codigo', 'text', array('label' => 'Codigo'))
            ->add('nombre', 'text', array('label' => 'Nombre'))
            ->add('precioCompra', 'money', array('label' => 'Precio costo', 'currency' => 'USD'))
            ->add('porcentajeGanancia', 'integer', array('label' => '% Ganancia'))
            ->add('cantidad', 'integer', array('label' => 'Stock inicial'))
            ->add('categoria', 'choice', array('choices' => array('0' => 'lavarropa', '1' => 'lavavajilla', '2' => 'aire acondicionado', '3' => 'cocina', '4' => 'microondas') , 'label' => 'Categoria'))
            ->add('save', 'submit', array('label' => 'Modificar repuesto'))
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid())
        {

        }

        return $this->render('AcmeDemoTwoBundle:Repuestos:BusquedaAvanzada.html.twig', array('form' => $form->createView()));
    }


    public function blogAction($entry)
    {
    	return $this->render('AcmeDemoTwoBundle:Default:blog.html.twig', array('entry' => $entry));
    }
}
