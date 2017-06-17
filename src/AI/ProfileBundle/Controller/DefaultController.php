<?php

namespace AI\ProfileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AIProfileBundle:Default:index.html.twig');
    }
}
