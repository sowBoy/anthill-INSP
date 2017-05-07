<?php

namespace OC\BoutiqueBundle\Controller;

use OC\BoutiqueBundle\Form\TarificationEditType;
use OC\BoutiqueBundle\Form\TarificationType;
use OC\BoutiqueBundle\Entity\Tarification;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class TarificationController extends Controller
{
	

    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function ajoutAction(Request $request)
  {
   
    $tarification = new Tarification();
	$em = $this->getDoctrine()->getManager();
    $form   = $this->get('form.factory')->create(TarificationType::class, $tarification);
   $tarificati = $em->getRepository('OCBoutiqueBundle:Tarification')->find(1);
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		if($tarificati == null){
	  
	  $tarification->setId(1);
	  $em->persist($tarification);
      $em->flush();
	  
		 return $this->redirectToRoute('oc_platform_home');
	 }else{
		 return $this->redirectToRoute('oc_core_existent');
	 }
    }
	
    return $this->render('OCBoutiqueBundle:Tarification:ajout.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
   
  
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function modifAction(Tarification $tarification, Request $request)
  {
    $form = $this->get('form.factory')->create(TarificationEditType::class, $tarification);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
     
      $em = $this->getDoctrine()->getManager();
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Annonce bien modifiée.');

      return $this->redirectToRoute('oc_platform_home');
    }

    return $this->render('OCBoutiqueBundle:Tarification:modif.html.twig', array(
      'tarification' => $tarification,
      'form'   => $form->createView(),
    ));
  }
    /**
     * @Security("has_role('ROLE_ADMIN')")
     */
  public function lookAction()
  {
    $em = $this->getDoctrine()->getManager();
	$listTarifications = $em->getRepository('OCBoutiqueBundle:Tarification')->findAll();

    return $this->render('OCBoutiqueBundle:Tarification:look.html.twig', array(
      'listTarifications' => $listTarifications
    ));
  }
    
}
