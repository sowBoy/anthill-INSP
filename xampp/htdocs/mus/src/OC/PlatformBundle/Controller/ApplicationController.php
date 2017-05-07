<?php

// src/OC/PlatformBundle/Controller/AdvertController.php

namespace OC\PlatformBundle\Controller;
use OC\PlatformBundle\Entity\Advert;
use OC\PlatformBundle\Entity\Application;
use OC\PlatformBundle\Event\MessagePostEvent;
use OC\PlatformBundle\Event\PlatformEvents;
use OC\PlatformBundle\Form\AdvertEditType;
use OC\PlatformBundle\Form\ApplicationType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ApplicationController extends Controller
{
  
  /**
   * @Security("has_role('ROLE_USER')")
   */
  public function applyAction($id, Request $request)
  {
    
    $application = new Application();
	$currentU = $this->getUser();
	$application->setUser($currentU);
    $form   = $this->get('form.factory')->create(ApplicationType::class, $application);
	     $em = $this->getDoctrine()->getManager();
		 $advert = $em->getRepository('OCPlatformBundle:Advert')->find($id);
		
		 $applica = $em->getRepository('OCPlatformBundle:Application')->findByAdvAndApp($advert, $currentU);
				  
  
		  if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
			  if($applica == null){
			  $application->setAdvert($advert);
			  $em->persist($application);
			  $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'Candidature bien prise en compte.');
	  return $this->redirect($this->generateUrl('oc_core_message'));
		 }else{
			 return $this->redirect($this->generateUrl('oc_platform_candidat')); 
		 }
		 }
    return $this->render('OCPlatformBundle:Application:apply.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
  public function candidatAction()
  {
    return $this->render('OCPlatformBundle:Application:candidat.html.twig');
  }

}
