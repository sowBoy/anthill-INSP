<?php

namespace OC\AnnonceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCAnnonceBundle:Default:index.html.twig');
    }
}
