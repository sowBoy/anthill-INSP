<?php

namespace OC\BoutiqueBundle\Controller;

use OC\BoutiqueBundle\Form\BoutiqueEditType;
use OC\BoutiqueBundle\Form\BoutiqueType;
use OC\BoutiqueBundle\Form\DemandeType;
use OC\BoutiqueBundle\Entity\Boutique;
use OC\BoutiqueBundle\Entity\Demande;
use OC\ProductBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BoutiqueController extends Controller
{
	/**
     * @Security("has_role('ROLE_ADMIN')")
     */
	public function etuDemAction(Demande $etuDem)
  {
    $em = $this->getDoctrine()->getManager();
    return $this->render('OCBoutiqueBundle:Boutique:etuDem.html.twig', array(
      'etuDem'           => $etuDem
    ));
  }
  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
	public function mesVendsAction(Boutique $mesVends)
  {
    $em = $this->getDoctrine()->getManager();
    return $this->render('OCBoutiqueBundle:Boutique:mesVends.html.twig', array(
      'mesVends'           => $mesVends
    ));
  }
  
  public function viewAction(Boutique $boutique, $id)
  {
    $em = $this->getDoctrine()->getManager();
	$theBoutique = $em->getRepository('OCBoutiqueBundle:Boutique')->find($id);
	$listProduits = $em->getRepository('OCProductBundle:Product')->findByBoutique($theBoutique);
	
    return $this->render('OCBoutiqueBundle:Boutique:view.html.twig', array(
      'boutique'           => $boutique,
	  'listProduits'           => $listProduits,
	  
    ));
  }

    /**
     * @Security("has_role('ROLE_SELLER')")
     */
  public function addAction(Request $request)
  {
   
    $boutique = new Boutique();
	$boutique->setUser($this->getUser());
    $form   = $this->get('form.factory')->create(BoutiqueType::class, $boutique);
   
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		 $em = $this->getDoctrine()->getManager();
		$theShop = $em->getRepository('OCBoutiqueBundle:Boutique')->findOneByUser($this->getUser());
		if($theShop == null){
		foreach ($form->get('produits')->getData() as $prod) {
          $prod->setBoutique($boutique);
          $em->persist($prod);
        }
       
        $em->flush();
	  $boutique->getProduits()->clear();
	  $em->persist($boutique);
      $em->flush();
	  
	  return $this->redirectToRoute('oc_boutique_view', array('id' => $boutique->getId()));
	  } else{
		 return $this->redirectToRoute('oc_boutique_secoundB');
	  }
	  
    }
	
    return $this->render('OCBoutiqueBundle:Boutique:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
    /**
     * @Security("has_role('ROLE_USER')")
     */
  public function demanderAction(Request $request)
  {
   
    $demande = new Demande();
	$demande->setUser($this->getUser());
    $form   = $this->get('form.factory')->create(DemandeType::class, $demande);
   
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		 $em = $this->getDoctrine()->getManager();
		$theShop = $em->getRepository('OCBoutiqueBundle:Boutique')->findOneByUser($this->getUser());
		$laDemande = $em->getRepository('OCBoutiqueBundle:Demande')->findOneByUser($this->getUser());
		$ceUser = $this->getUser();
		if (!$this->get('security.authorization_checker')->isGranted('ROLE_SELLER')) {
       
		if($laDemande == null){	
		 $em->persist($demande);
        $em->flush();
		return $this->redirectToRoute('oc_core_message');
        }else{
		  return $this->redirectToRoute('oc_boutique_notification');
	  }
    
	  }else{
		  return $this->redirectToRoute('oc_boutique_youAre');
	  } 
	  }
	  
    return $this->render('OCBoutiqueBundle:Boutique:demander.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
    /**
     * @Security("has_role('ROLE_SELLER')")
     */
  public function editAction($id, Boutique $boutique, Request $request)
  {
    $em = $this->getDoctrine()->getManager();
	$bouti = $em->getRepository('OCBoutiqueBundle:Boutique')->find($id);
	$theUs = $bouti->getUser();
	$currentUs = $this->getUser();
	if($theUs == $currentUs){
	$form = $this->get('form.factory')->create(BoutiqueEditType::class, $boutique);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Modifications bien prises en compte.');

      return $this->redirectToRoute('oc_boutique_view', array('id' => $boutique->getId()));
    }

    return $this->render('OCBoutiqueBundle:Boutique:edit.html.twig', array(
      'boutique' => $boutique,
      'form'   => $form->createView(),
    ));
	}else{
		return $this->redirect($this->generateUrl('oc_core_malin'));
	}
  }

  public function menuAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
	$findBoutiques = $em->getRepository('OCBoutiqueBundle:Boutique')->findByValid(true);
    $listBoutiques = $this->get('knp_paginator')->paginate($findBoutiques,$request->query->get('page', 1),6);
    return $this->render('OCBoutiqueBundle:Boutique:menu.html.twig', array(
      'listBoutiques' => $listBoutiques
    ));
  }
  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function lesDemandesAction()
  {
    $em = $this->getDoctrine()->getManager();
	$listDemandes = $em->getRepository('OCBoutiqueBundle:Demande')->findAll();
    $lesVendeurs = $em->getRepository('OCBoutiqueBundle:Boutique')->findAll();
    return $this->render('OCBoutiqueBundle:Boutique:lesDemandes.html.twig', array(
      'listDemandes' => $listDemandes,
	  'lesVendeurs' => $lesVendeurs
    ));
  }
  
   public function notificationAction()
  {
  
    return $this->render('OCBoutiqueBundle:Boutique:notification.html.twig');
  }
  
  
  public function youAreAction()
  {
  
    return $this->render('OCBoutiqueBundle:Boutique:youAre.html.twig');
  }
  
   public function secoundBAction()
  {
     return $this->render('OCBoutiqueBundle:Boutique:secoundB.html.twig');
  }
  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function accepterAction($id)
  {
    $em = $this->getDoctrine()->getManager();
	$cetteD = $em->getRepository('OCBoutiqueBundle:Demande')->find($id);
	$cetU = $cetteD->getUser();
    $cetU->setRoles(array('ROLE_SELLER'));
	$em->flush();
	$em->remove($cetteD);
	$em->flush();
	$message = new \Swift_Message(
      'Vous devenez vendeurs',
      'Bravo vous venez d\'être accepté en temps que vendeur sur entremus.RDV sur vôtre espace utilisateur pour amenager vôtre boutique.'
    );

    $message
      ->addTo($cetU->getEmail())
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($message);

    return $this->redirectToRoute('oc_boutique_lesDemandes');
  }
  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function refuserAction($id)
  {
    
    $em = $this->getDoctrine()->getManager();
	$cetteDem = $em->getRepository('OCBoutiqueBundle:Demande')->find($id);
	$em->remove($cetteDem);
	$em->flush();
	$message = new \Swift_Message(
      'Refus de demande',
      'Nous sommes desolé de ne pouvoir accèpter votre demande.'
    );

    $message
      ->addTo($cetteDem->getUser()->getEmail())
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($message);
    return $this->redirectToRoute('oc_boutique_lesDemandes');
  }
  
  /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function suspendreAction($id)
  {
    
    $em = $this->getDoctrine()->getManager();
	$cetteDem = $em->getRepository('OCBoutiqueBundle:Boutique')->find($id);
	$cetteDem->setValid(false);
	$em->flush();
    return $this->redirectToRoute('oc_boutique_lesDemandes');
  }
  
  /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function leverSAction($id)
  {
    
    $em = $this->getDoctrine()->getManager();
	$cetteDem = $em->getRepository('OCBoutiqueBundle:Boutique')->find($id);
	$cetteDem->setValid(true);
	$em->flush();
    return $this->redirectToRoute('oc_boutique_lesDemandes');
  }

    
}
