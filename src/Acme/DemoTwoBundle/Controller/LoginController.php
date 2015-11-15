<?php

namespace Acme\DemoTwoBundle\Controller;

use Acme\DemoTwoBundle\Entity\User;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoginController extends Controller
{

    public function indexAction(Request $request)
    {
        $user = new User();
        $form = $this->createFormBuilder($user)
        ->add('username','text')
        ->add('password','password')
        ->add('save','submit',array('label'=>'Log In'))
        ->getForm();
        
        $form->handleRequest($request);

        if($form->isValid())
        {

            return $this->render('AcmeDemoTwoBundle:Login:success.html.twig', array('user' => $user));    
        }
        
        return $this->render('AcmeDemoTwoBundle:Default:login.html.twig', array('form' => $form->createView()));
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
