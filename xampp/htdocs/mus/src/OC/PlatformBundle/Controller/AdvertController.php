<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;

use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Event\MessagePostEvent;
use OC\PlatformBundle\Event\PlatformEvents;
use OC\PlatformBundle\Form\AdvertEditType;
use OC\PlatformBundle\Form\AdvertType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AdvertController extends Controller
{
 
  
  public function lookAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $findAdverts = $em->getRepository('OCPlatformBundle:Advert')->findByValid(true);
	$listAdverts = $this->get('knp_paginator')->paginate($findAdverts,$request->query->get('page', 1),1);
    return $this->render('OCPlatformBundle:Advert:look.html.twig', array(
      'listAdverts' => $listAdverts
    ));
   
  }
  
  public function viewAction(Advert $advert)
  {
    $em = $this->getDoctrine()->getManager();

    // Récupération de la liste des candidatures de l'annonce
    $listApplications = $em
      ->getRepository('OCPlatformBundle:Application')
      ->findBy(array('advert' => $advert))
    ;

    return $this->render('OCPlatformBundle:Advert:view.html.twig', array(
      'advert'           => $advert,
      'listApplications' => $listApplications,
    ));
  }
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function validationAction(Advert $preAdvert)
  {
    $em = $this->getDoctrine()->getManager();
	
    return $this->render('OCPlatformBundle:Advert:validation.html.twig', array(
      'preAdvert'           => $preAdvert,
    ));
   }
    /**
     * @Security("has_role('ROLE_USER')")
     */
  public function addAction(Request $request)
  {
    
    $advert = new Advert();
	$advert->setUser($this->getUser());
    $form   = $this->get('form.factory')->create(AdvertType::class, $advert);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	  return $this->redirect($this->generateUrl('oc_core_message'));
   
    }

    return $this->render('OCPlatformBundle:Advert:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
 
  
  public function editAction($id, Advert $advert, Request $request)
  {
    $form = $this->get('form.factory')->create(AdvertEditType::class, $advert);
    $em = $this->getDoctrine()->getManager();
	$rsumes = $em->getRepository('OCPlatformBundle:Advert')->find($id);
	$use = $rsumes->getUser();
    $currentUs = $this->getUser();
	if($use == $currentUs){
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      // Inutile de persister ici, Doctrine connait déjà notre annonce
      $em = $this->getDoctrine()->getManager();
	  $advert->setValid(false);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      return $this->redirect($this->generateUrl('oc_core_message'));
    }

    return $this->render('OCPlatformBundle:Advert:edit.html.twig', array(
      'advert' => $advert,
      'form'   => $form->createView(),
    ));
	}else{
		return $this->redirect($this->generateUrl('oc_core_malin'));
	}
  }

  public function deleteAction($id, Request $request, Advert $advert)
  {
    $em = $this->getDoctrine()->getManager();

    $form = $this->get('form.factory')->create();
    $rsumes = $em->getRepository('OCPlatformBundle:Advert')->find($id);
	$use = $rsumes->getUser();
    $currentUs = $this->getUser();
	if($use == $currentUs){
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($advert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('oc_platform_home');
    }
    
    return $this->render('OCPlatformBundle:Advert:delete.html.twig', array(
      'advert' => $advert,
      'form'   => $form->createView(),
    ));
	}else{
		return $this->redirect($this->generateUrl('oc_core_malin'));
	}
  }
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function declinerAction(Request $request, Advert $preAdvert)
  {
    $em = $this->getDoctrine()->getManager();

    // On crée un formulaire vide, qui ne contiendra que le champ CSRF
    // Cela permet de protéger la suppression d'annonce contre cette faille
    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($preAdvert);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('oc_platform_checkin');
    }
    
    return $this->render('OCPlatformBundle:Advert:decliner.html.twig', array(
      'preAdvert' => $preAdvert,
      'form'   => $form->createView(),
    ));
  }

  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function checkinAction()
  {
    $em = $this->getDoctrine()->getManager();

    $listPreAdverts = $em->getRepository('OCPlatformBundle:Advert')->findByValid(false);
    return $this->render('OCPlatformBundle:Advert:checkin.html.twig', array(
      'listPreAdverts' => $listPreAdverts
    ));
  }
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function validAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $preAdvert = $em->getRepository('OCPlatformBundle:Advert')->find($id);
    $preAdvert->setValid(true);
      $em->flush();
	  $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('oc_platform_checkin');
  }

  // Méthode facultative pour tester la purge
  public function purgeAction($days, Request $request)
  {
    // On récupère notre service
    $purger = $this->get('oc_platform.purger.advert');

    // On purge les annonces
    $purger->purge($days);

    // On ajoute un message flash arbitraire
    $request->getSession()->getFlashBag()->add('info', 'Les annonces plus vieilles que '.$days.' jours ont été purgées.');

    // On redirige vers la page d'accueil
    return $this->redirectToRoute('oc_platform_home');
  }

  public function translationAction($name)
  {
    return $this->render('OCPlatformBundle:Advert:translation.html.twig', array(
      'name' => $name
    ));
  }

  /**
   * @ParamConverter("json")
   */
  public function ParamConverterAction($json)
  {
    return new Response(print_r($json, true));
  }
  
  public function mosaiqueAction($limit)
  {
    $em = $this->getDoctrine()->getManager();

    $listJobs = $em->getRepository('OCPlatformBundle:Advert')->findBy(
      array(),                 // Pas de critère
      array('date' => 'desc'), // On trie par date décroissante
      $limit,                  // On sélectionne $limit annonces
      0                        // À partir du premier
    );
	
	$listAnnons = $em->getRepository('OCAnnonceBundle:Annonce')->findBy(
      array(),                 // Pas de critère
      array('date' => 'desc'), // On trie par date décroissante
      $limit,                  // On sélectionne $limit annonces
      0                        // À partir du premier
    );
	
	$listCvs = $em->getRepository('OCOnlineCvBundle:TheResume')->findBy(
      array(),                 // Pas de critère
      array('date' => 'desc'), // On trie par date décroissante
      $limit,                  // On sélectionne $limit annonces
      0                        // À partir du premier
    );

    return $this->render('OCPlatformBundle:Advert:mosaique.html.twig', array(
      'listJobs' => $listJobs,
	  'listAnnons' => $listAnnons,
	  'listCvs' => $listCvs
    ));
  }
}
