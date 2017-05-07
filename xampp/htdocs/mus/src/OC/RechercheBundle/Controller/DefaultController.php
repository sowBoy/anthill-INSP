<?php

namespace OC\RechercheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCRechercheBundle:Default:index.html.twig');
    }
}
