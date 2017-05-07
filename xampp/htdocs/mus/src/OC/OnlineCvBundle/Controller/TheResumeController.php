<?php

// src/OC/OnlineCvBundle/Controller/TheResumeController.php

namespace OC\OnlineCvBundle\Controller;

use OC\OnlineCvBundle\Entity\Loisirs;
use OC\OnlineCvBundle\Entity\Langues;
use OC\OnlineCvBundle\Entity\Competence;
use OC\OnlineCvBundle\Entity\Experiences;
use OC\OnlineCvBundle\Entity\Formation;
use OC\OnlineCvBundle\Entity\TheResume;
use OC\OnlineCvBundle\Form\TheResumeEditType;
use OC\OnlineCvBundle\Form\TheResumeType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TheResumeController extends Controller
{
  public function indexAction()
  {
    
  }
   
  public function viewAction(TheResume $theResume)
  {
    
    return $this->render('OCOnlineCvBundle:TheResume:view.html.twig', array(
      'theResume'           => $theResume,
    ));
  }

    /**
     * @Security("has_role('ROLE_USER')")
     */
  public function addAction(Request $request)
  {
   
    $theResume = new TheResume();
	$theResume->setUser($this->getUser());
    $form   = $this->get('form.factory')->create(TheResumeType::class, $theResume);
   
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		 $em = $this->getDoctrine()->getManager();
		foreach ($form->get('formations')->getData() as $for) {
          $for->setTheResume($theResume);
          $em->persist($for);
        }
       
		
	foreach ($form->get('experiences')->getData() as $exp) {
          $exp->setTheResume($theResume);
          $em->persist($exp);
        }
       
		
    foreach ($form->get('competences')->getData() as $comp) {
          $comp->setTheResume($theResume);
          $em->persist($comp);
        }
      
	
	foreach ($form->get('langues')->getData() as $lang) {
          $lang->setTheResume($theResume);
          $em->persist($lang);
        }
       
	
	foreach ($form->get('loisirs')->getData() as $lois) {
          $lois->setTheResume($theResume);
          $em->persist($lois);
        }
        $em->flush();
	  $theResume->getFormations()->clear();
	  $theResume->getExperiences()->clear();
	  $theResume->getCompetences()->clear();
	  $theResume->getLangues()->clear();
	  $theResume->getLoisirs()->clear();
	  $em->persist($theResume);
      $em->flush();
	  
      return $this->redirect($this->generateUrl('oc_core_message'));
    }
	
    return $this->render('OCOnlineCvBundle:TheResume:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
 
    /**
     * @Security("has_role('ROLE_USER')")
     */
  public function editAction($id, TheResume $theResume, Request $request, Loisirs $loisirs)
  {
    
	 $em = $this->getDoctrine()->getManager();
	 $form = $this->get('form.factory')->create(TheResumeEditType::class, $theResume);
	 $rsumes = $em->getRepository('OCOnlineCvBundle:TheResume')->find($id);
	 $use = $rsumes->getUser();
    $currentUs = $this->getUser();
	if($use == $currentUs){
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		
		
        
		foreach ($form->get('formations')->getData() as $for) {
          $for->setTheResume($theResume);
          $em->persist($for);
        }
       
		
	foreach ($form->get('experiences')->getData() as $exp) {
          $exp->setTheResume($theResume);
          $em->persist($exp);
        }
       
		
    foreach ($form->get('competences')->getData() as $comp) {
          $comp->setTheResume($theResume);
          $em->persist($comp);
        }
      
	
	foreach ($form->get('langues')->getData() as $lang) {
          $lang->setTheResume($theResume);
          $em->persist($lang);
        }
       
	
	foreach ($form->get('loisirs')->getData() as $lois) {
          $lois->setTheResume($theResume);
          $em->persist($lois);
        }
		$theResume->setValid(false);
        $em->flush();
     
      $request->getSession()->getFlashBag()->add('notice', 'CV bien enregistré.');

      return $this->redirect($this->generateUrl('oc_core_message'));
    }

    return $this->render('OCOnlineCvBundle:TheResume:edit.html.twig', array(
      'theResume' => $theResume,
      'form'   => $form->createView(),
    ));
	
  }else{
	  return $this->redirect($this->generateUrl('oc_core_malin'));
  }}
   
   
    /**
     * @Security("has_role('ROLE_USER')")
     */
  public function deleteAction($id, Request $request, TheResume $theResume)
  {
    
    $form = $this->get('form.factory')->create();
    $em = $this->getDoctrine()->getManager();
	$rsumes = $em->getRepository('OCOnlineCvBundle:TheResume')->find($id);
	$use = $rsumes->getUser();
    $currentUs = $this->getUser();
	if($use == $currentUs){
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($theResume);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "Le CV a bien été supprimé.");

      return $this->redirectToRoute('oc_online_cv_home');
    }
    
    return $this->render('OCOnlineCvBundle:TheResume:delete.html.twig', array(
      'theResume' => $theResume,
      'form'   => $form->createView(),
    ));
	
	}else{
	  return $this->redirect($this->generateUrl('oc_core_malin'));
  }
  }
  
  public function menuAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();

    $findTheResumes = $em->getRepository('OCOnlineCvBundle:TheResume')->findByValid(true);
    $listTheResumes = $this->get('knp_paginator')->paginate($findTheResumes,$request->query->get('page', 1),1);
    return $this->render('OCOnlineCvBundle:TheResume:menu.html.twig', array(
      'listTheResumes' => $listTheResumes
    ));
  }
  
  /**
   * @ParamConverter("json")
   */
  public function ParamConverterAction($json)
  {
    return new Response(print_r($json, true));
  }
  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function validationAction(TheResume $preTheResume)
  {
    $em = $this->getDoctrine()->getManager();
	
    return $this->render('OCOnlineCvBundle:TheResume:validation.html.twig', array(
      'preTheResume'           => $preTheResume,
    ));
   }
  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
   public function declinerAction(Request $request, TheResume $preTheResume)
  {
    $em = $this->getDoctrine()->getManager();

    $form = $this->get('form.factory')->create();

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em->remove($preTheResume);
      $em->flush();

      $request->getSession()->getFlashBag()->add('info', "CV bien supprimé.");

      return $this->redirectToRoute('oc_online_cv_checkin');
    }
    
    return $this->render('OCOnlineCvBundle:TheResume:decliner.html.twig', array(
      'preTheResume' => $preTheResume,
      'form'   => $form->createView(),
    ));
  }

  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function checkinAction()
  {
    $em = $this->getDoctrine()->getManager();

    $listPreTheResumes = $em->getRepository('OCOnlineCvBundle:TheResume')->findByValid(false);
    return $this->render('OCOnlineCvBundle:TheResume:checkin.html.twig', array(
      'listPreTheResumes' => $listPreTheResumes
    ));
  }
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
    public function validAction(Request $request, $id)
  {
    $em = $this->getDoctrine()->getManager();

    $preTheResume = $em->getRepository('OCOnlineCvBundle:TheResume')->find($id);
    $preTheResume->setValid(true);
      $em->flush();
	  $request->getSession()->getFlashBag()->add('info', "L'annonce a bien été supprimée.");

      return $this->redirectToRoute('oc_online_cv_checkin');
  }
}
