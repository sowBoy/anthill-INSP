<?php

namespace OC\PubBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\PubBundle\Entity\Banniere;
use OC\PubBundle\Entity\BanniLarge;
use OC\PubBundle\Form\BanniereType;
use OC\PubBundle\Form\BanniLargeType;


class PubController extends Controller
{
    /**
     * @Security("has_role('ROLE_USER')")
     */
  public function addHoriAction(Request $request)
  {
    
    $banni = new Banniere();
	$banni->setUser($this->getUser());
    $form   = $this->get('form.factory')->create(BanniereType::class, $banni);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($banni);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Banniere bien enregistrée.');
	  return $this->redirect($this->generateUrl('oc_core_message'));
   
    }

    return $this->render('OCPubBundle:Pub:addHori.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
  /**
     * @Security("has_role('ROLE_USER')")
     */
  public function addLargeAction(Request $request)
  {
    
    $banniLarge = new BanniLarge();
	$banniLarge->setUser($this->getUser());
    $form   = $this->get('form.factory')->create(BanniLargeType::class, $banniLarge);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($banniLarge);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Banniere bien enregistrée.');
	  return $this->redirect($this->generateUrl('oc_core_message'));
   
    }

    return $this->render('OCPubBundle:Pub:addLarge.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function checkinAction()
  {
    $em = $this->getDoctrine()->getManager();

    $listPreBannHoris = $em->getRepository('OCPubBundle:Banniere')->findByValid(false);
	$listPreBannLarges = $em->getRepository('OCPubBundle:BanniLarge')->findByValid(false);
	
    return $this->render('OCPubBundle:Pub:checkin.html.twig', array(
      'listPreBannHoris' => $listPreBannHoris,
	  'listPreBannLarges' => $listPreBannLarges
    ));
  }
  /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function validHoriAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $preBanniHori = $em->getRepository('OCPubBundle:Banniere')->find($id);
	
    $preBanniHori->setValid(true);
	
      $em->flush();
	  $request->getSession()->getFlashBag()->add('info', "Banniere supprimée.");

      return $this->redirectToRoute('oc_pub_checkin');
  }
  
  /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function validLargeAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    
	$preBanniLarge = $em->getRepository('OCPubBundle:BanniLarge')->find($id);
    
	$preBanniLarge->setValid(true);
      $em->flush();
	  $request->getSession()->getFlashBag()->add('info', "Banniere supprimée.");

      return $this->redirectToRoute('oc_pub_checkin');
  }
  /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function declinerHoriAction(Request $request, Banniere $preBanniHori)
  {
    $em = $this->getDoctrine()->getManager();

    
    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($preBanniHori);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "bien été supprimée.");

      return $this->redirectToRoute('oc_pub_checkin');
    }
    
    return $this->render('OCPubBundle:Pub:declinerHori.html.twig', array(
      'preBanniHori' => $preBanniHori,
      'form'   => $form->createView(),
    ));
  }
  
   /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function declinerLargeAction(Request $request, BanniLarge $preBanniLarge)
  {
    $em = $this->getDoctrine()->getManager();

    
    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($preBanniLarge);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "bien été supprimée.");

      return $this->redirectToRoute('oc_pub_checkin');
    }
    
    return $this->render('OCPubBundle:Pub:declinerLarge.html.twig', array(
      'preBanniLarge' => $preBanniLarge,
      'form'   => $form->createView(),
    ));
  }
  
  public function banniHoriAction()
  {
     $em = $this->getDoctrine()->getManager();
	$listeBanniHoris = $em->getRepository('OCPubBundle:Banniere')->findByValid(true);
    return $this->render('OCPubBundle:Pub:banniHori.html.twig', array(
      'listeBanniHoris'           => $listeBanniHoris
    ));
  }
  
  public function banniLargeAction()
  {
     $em = $this->getDoctrine()->getManager();
	$listeBanniLarges = $em->getRepository('OCPubBundle:BanniLarge')->findByValid(true);
    return $this->render('OCPubBundle:Pub:banniLarge.html.twig', array(
      'listeBanniLarges'           => $listeBanniLarges
    ));
  }
  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function validationHoriAction(Banniere $preBanniHori)
  {
    $em = $this->getDoctrine()->getManager();
	
    return $this->render('OCPubBundle:Pub:validationHori.html.twig', array(
      'preBanniHori'           => $preBanniHori
    ));
   }
   
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function validationLargeAction(BanniLarge $preBanniLarge)
  {
    $em = $this->getDoctrine()->getManager();
	
    return $this->render('OCPubBundle:Pub:validationLarge.html.twig', array(
	  'preBanniLarge'           => $preBanniLarge
    ));
   }
  
}
