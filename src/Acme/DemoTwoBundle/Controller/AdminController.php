<?php

namespace Acme\DemoTwoBundle\Controller;

use Acme\DemoTwoBundle\Entity\Product;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeDemoTwoBundle:Admin:index.html.twig');
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
