<?php

namespace OC\PubBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCPubBundle:Default:index.html.twig');
    }
}
