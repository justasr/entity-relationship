<?php

namespace Acme\SearchBundle\Controller;

use Acme\SearchBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\BrowserKit\Request;
use Symfony\Component\HttpFoundation\Response;

class CarController extends Controller
{
    public function listAction() {
        $car = $this->getDoctrine()
            ->getRepository('AcmeSearchBundle:Cars')
            ->find(1);

        foreach( $car->getUsers() as $user ) {
            dump($user);
        }

        exit;
    }


}
