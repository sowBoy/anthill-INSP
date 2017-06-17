<?php

namespace OC\AnnonceBundle\Controller;

use OC\AnnonceBundle\Entity\Annonce;
use OC\PlatformBundle\Event\MessagePostEvent;
use OC\PlatformBundle\Event\PlatformEvents;
use OC\AnnonceBundle\Form\AnnonceEditType;
use OC\AnnonceBundle\Form\AnnonceType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use OC\AnnonceBundle\Form\OcContactType;

class AnnonceController extends Controller
{
 
  
  public function lookAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $findAnnonces = $em->getRepository('OCAnnonceBundle:Annonce')->findByThisV(true);
	$listAnnonces = $this->get('knp_paginator')->paginate($findAnnonces,$request->query->get('page', 1),10);
	
    return $this->render('OCAnnonceBundle:Annonce:look.html.twig', array(
      'listAnnonces' => $listAnnonces
	  
    ));
   
  }
  
  public function viewAction(Annonce $annonce)
  {
    
    return $this->render('OCAnnonceBundle:Annonce:view.html.twig', array(
      'annonce'           => $annonce ));
  }
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function validationAction(Annonce $preAnnonce)
  {
    $em = $this->getDoctrine()->getManager();
	
    return $this->render('OCAnnonceBundle:Annonce:validation.html.twig', array(
      'preAnnonce'           => $preAnnonce,
    ));
   }
    
	
	
	
	/**
     * @Security("has_role('ROLE_USER')")
     */
  public function addAction(Request $request)
  {
    
    $annonce = new Annonce();
	$annonce->setUser($this->getUser());
    $form   = $this->get('form.factory')->create(AnnonceType::class, $annonce);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
	  foreach ($form->get('galeries')->getData() as $gal) {
          $gal->setAnnonce($annonce);
          $em->persist($gal);
        }
	  $em->flush();
	  $annonce->getGaleries()->clear(); 
      $em->persist($annonce);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien enregistrée.');
	  
	   $message = new \Swift_Message(
      'Votre annonce',
      'Nous avons reçus votre annonce.Elle sera traité dans les plus brèf delai.'
    );

    $message
      ->addTo($this->getUser()->getEmail())
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($message);

	  return $this->redirect($this->generateUrl('oc_core_message'));
   
    }

    return $this->render('OCAnnonceBundle:Annonce:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
 
  
  public function editAction($id, Annonce $annonce, Request $request)
  {
    $form = $this->get('form.factory')->create(AnnonceEditType::class, $annonce);
    $em = $this->getDoctrine()->getManager();
	$rsumes = $em->getRepository('OCAnnonceBundle:Annonce')->find($id);
	$use = $rsumes->getUser();
    $currentUs = $this->getUser();
	if($use == $currentUs){
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
     
      $em = $this->getDoctrine()->getManager();
	  $annonce->setValid(false);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');
	   $message = new \Swift_Message(
      'Votre annonce',
      'Nous avons reçus votre annonce.Elle sera traité dans les plus brèf delai.'
    );

    $message
      ->addTo($this->getUser()->getEmail())
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($message);

      return $this->redirect($this->generateUrl('oc_core_message'));
    }

    return $this->render('OCAnnonceBundle:Annonce:edit.html.twig', array(
      'annonce' => $annonce,
      'form'   => $form->createView(),
    ));
	}else{
		return $this->redirect($this->generateUrl('oc_core_malin'));
	}
  }

  public function deleteAction($id, Request $request, Annonce $annonce)
  {
    $em = $this->getDoctrine()->getManager();

    $form = $this->get('form.factory')->create();
    $rsumes = $em->getRepository('OCAnnonceBundle:Annonce')->find($id);
	$use = $rsumes->getUser();
    $currentUs = $this->getUser();
	if($use == $currentUs){
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($annonce);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('oc_platform_home');
    }
    
    return $this->render('OCAnnonceBundle:Annonce:delete.html.twig', array(
      'annonce' => $annonce,
      'form'   => $form->createView(),
    ));
	}else{
		return $this->redirect($this->generateUrl('oc_core_malin'));
	}
  }
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function declinerAction(Request $request, Annonce $preAnnonce)
  {
    $em = $this->getDoctrine()->getManager();

    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($preAnnonce);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");
	  
	   $message = new \Swift_Message(
      'Votre annonce',
      'Malheureusement votre annonce ne correspond pas aux critères de la maison.'
    );

    $message
      ->addTo($preAnnonce->getUser()->getEmail())
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($message);

      return $this->redirectToRoute('oc_annonce_checkin');
    }
    
    return $this->render('OCAnnonceBundle:Annonce:decliner.html.twig', array(
      'preAnnonce' => $preAnnonce,
      'form'   => $form->createView(),
    ));
  }

  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function checkinAction()
  {
    $em = $this->getDoctrine()->getManager();

    $listPreAnnonces = $em->getRepository('OCAnnonceBundle:Annonce')->findByValid(false);
    return $this->render('OCAnnonceBundle:Annonce:checkin.html.twig', array(
      'listPreAnnonces' => $listPreAnnonces
    ));
  }
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function validAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $preAnnonce = $em->getRepository('OCAnnonceBundle:Annonce')->find($id);
    $preAnnonce->setValid(true);
      $em->flush();
	  $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");
	  
	   $message = new \Swift_Message(
      'Votre annonce',
      'Assalam alykoum votre annonce est en ligne RDV sur votre espace utilisateur(mon depôt).'
    );

    $message
      ->addTo($preAnnonce->getUser()->getEmail())
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($message);


      return $this->redirectToRoute('oc_annonce_checkin');
  }
   
    public function contactAction(Request $request)
  {
    $form   = $this->get('form.factory')->create(OcContactType::class);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		
		$message = \Swift_Message::newInstance()
                ->setSubject($form->get('objet')->getData())
                ->setFrom($form->get('email')->getData())
                ->setTo('anthillinspire@entremus.com')
                  ->setBody($form->get('message')->getData()."<br>ContactMail :".$form->get('email')->getData());

            $this->get('mailer')->send($message);

            $request->getSession()->getFlashBag()->add('success', 'Votre message a été envoyé avec succès');

            return $this->redirect($this->generateUrl('oc_platform_home'));
      
    }

    return $this->render('OCAnnonceBundle:Annonce:contact.html.twig', array(
      'form' => $form->createView(),
    ));
  }
}
