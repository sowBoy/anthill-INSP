<?php

namespace OC\ProductBundle\Controller;

use OC\ProductBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProductController extends Controller
{
	public function viewAction(Product $produit)
  {
    
    return $this->render('OCProductBundle:Product:view.html.twig', array(
      'produit'           => $produit
    ));
  }
   
}
