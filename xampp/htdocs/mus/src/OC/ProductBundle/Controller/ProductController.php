<?php

namespace OC\ProductBundle\Controller;

use OC\ProductBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\ProductBundle\Form\ProductEditType;
use OC\ProductBundle\Form\ProductType;

class ProductController extends Controller
{
	public function viewAction(Product $produit)
  {
    
    return $this->render('OCProductBundle:Product:view.html.twig', array(
      'produit'           => $produit
    ));
  }
  
    /**
     * @Security("has_role('ROLE_SELLER')")
     */
  public function addProdAction(Request $request)
  {
   
    $produit = new Product();
	$em = $this->getDoctrine()->getManager();
    $form   = $this->get('form.factory')->create(ProductType::class, $produit);
    $boutiq = $em->getRepository('OCBoutiqueBundle:Boutique')->findOneByUser($this->getUser());
	if(!$boutiq == null){
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		 
		$produit->setBoutique($boutiq);
	  $em->persist($produit);
      $em->flush();
	  
	  return $this->redirectToRoute('oc_product_liste');
	  } 
	  
    return $this->render('OCProductBundle:Product:addProd.html.twig', array(
      'form' => $form->createView(),
    ));}else{
		return $this->redirect($this->generateUrl('oc_core_malin'));
	}
  }
  
    /**
     * @Security("has_role('ROLE_SELLER')")
     */
  public function modificationAction($id, Product $produit, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
	$bouti = $em->getRepository('OCBoutiqueBundle:Boutique')->findOneByUser($this->getUser());
	$prods = $em->getRepository('OCProductBundle:Product')->find($id);
	$laBouti = $prods->getBoutique();
	if($bouti == $laBouti){
	$form = $this->get('form.factory')->create(ProductEditType::class, $produit);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Modifications bien prises en compte.');

      return $this->redirectToRoute('oc_product_liste');
    }

    return $this->render('OCProductBundle:Product:modification.html.twig', array(
      'produit' => $produit,
      'form'   => $form->createView(),
    ));
	}else{
		return $this->redirect($this->generateUrl('oc_core_malin'));
	}
  }
    /**
     * @Security("has_role('ROLE_SELLER')")
     */
  public function listeAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
	$findBoutiques = $em->getRepository('OCBoutiqueBundle:Boutique')->findOneByUser($this->getUser());
	if(!$findBoutiques == null){
	$findProducts = $findBoutiques->getProduits();
    $listProducts = $this->get('knp_paginator')->paginate($findProducts,$request->query->get('page', 1),15);
    return $this->render('OCProductBundle:Product:liste.html.twig', array(
      'listProducts' => $listProducts
    ));}else{
		return $this->redirect($this->generateUrl('oc_core_malin'));
	}
  }
   
}
