<?php

namespace Acme\DemoTwoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Acme\DemoTwoBundle\Entity\Product;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    public function homeAction(Request $request)
    {
        return $this->render('AcmeDemoTwoBundle::home.html.twig');
    }

    public function loginAction(Request $request)
    {  
       $session = $request->getSession();

       /* if ($this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) {
            throw $this->createAccessDeniedException();
        } */

        // get the login error if there is one
        if ($request->attributes->has(Security::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(
                Security::AUTHENTICATION_ERROR
            );
        } elseif (null !== $session && $session->has(Security::AUTHENTICATION_ERROR)) {
            $error = $session->get(Security::AUTHENTICATION_ERROR);
            $session->remove(Security::AUTHENTICATION_ERROR);
        } else {
            $error = '';
        }

        // last username entered by the user
        $lastUsername = (null === $session) ? '' : $session->get(Security::LAST_USERNAME);

        return $this->render(
            'AcmeDemoTwoBundle::index.html.twig',
            array(
                'error'         => $error,
            )
        );
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
