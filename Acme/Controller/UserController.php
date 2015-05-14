<?php

namespace Acme\SearchBundle\Controller;

use Acme\SearchBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AcmeSearchBundle:Default:index.html.twig', array('name' => $name));
    }

    public function createAction() {
        $User = new User();
        $User->setFirstname("Firstname Test2");
        $User->setLastname("Lastname Test2");

        $em = $this->getDoctrine()->getManager();
        $em->persist($User);
        $em->flush();

        return new Response('User Created!');
    }

    public function listAction() {
        $user = $this->getDoctrine()
            ->getRepository('AcmeSearchBundle:User')
            ->find(1);

        foreach( $user->getCars() as $car ) {
            dump($car);
        }

        exit;
    }


}
