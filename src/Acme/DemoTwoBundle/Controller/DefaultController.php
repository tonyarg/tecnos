<?php

namespace Acme\DemoTwoBundle\Controller;

use Acme\DemoTwoBundle\Entity\Product;
use Acme\DemoTwoBundle\Entity\Pedido;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($index)
    {
        return $this->render('AcmeDemoTwoBundle:Default:index.html.twig', array('name' => $index));
    }

    public function testAction($repuestoNombre = 6)
    {
        $repository = $this->getDoctrine()->getRepository('AcmeDemoTwoBundle:Repuesto');
        $query = $repository->createQueryBuilder('c')
        ->join('AcmeDemoTwoBundle:PedidoTemporal', 'co', 'WITH', 'co.idRepuesto = c.id')
        ->where('co.idRepuesto = :idRepuesto')
        ->setParameter('idRepuesto', $repuestoNombre)
        ->getQuery();
        $repuestos = $query->getResult();
        return $this->render('AcmeDemoTwoBundle:Test:test.html.twig', array('repuestos' => $repuestos));

    }

    public function createAction($name,$price,$description)
    {
    	$product = new Product();
    	$product->setName($name);
    	$product->setPrice($price);
    	$product->setDescription($description);
    	$em = $this->getDoctrine()->getManager();
    	$em->persist($product);
    	$em->flush();

    	return new Response('producto creado con id '.$product->getId());	
    }

    public function blogAction($entry)
    {
    	return $this->render('AcmeDemoTwoBundle:Default:blog.html.twig', array('entry' => $entry));
    }
}
