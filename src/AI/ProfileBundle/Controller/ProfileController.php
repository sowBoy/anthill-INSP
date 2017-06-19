<?php

namespace AI\ProfileBundle\Controller;


use AI\ProfileBundle\Form\ProfileType;
use AI\ProfileBundle\Form\VersionType;
use AI\ProfileBundle\Entity\Profile;
use AI\ProfileBundle\Entity\Version;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProfileController extends Controller
{
	
  
    
  
  public function viewAction(Profile $profile, $id)
  {
    $em = $this->getDoctrine()->getManager();
	$theProfile = $em->getRepository('AIProfileBundle:Profile')->find($id);
	$listVersions = $em->getRepository('AIProfileBundle:Version')->findByProfile($theProfile);
	
    return $this->render('AIProfileBundle:Profile:view.html.twig', array(
      'profile'           => $profile,
	  'listVersions'           => $listVersions,
	  
    ));
  }

   
  public function addAction(Request $request)
  {
   
    $profile = new Profile();
    $form   = $this->get('form.factory')->create(ProfileType::class, $profile);
   
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		 $em = $this->getDoctrine()->getManager();
		/*
		Theoretically this is what is supposed to work:
		
		First deletes the list of versions of the profile added in the form.
		$profile->getVersions()->clear();
		
               Proceed to persist then to flush.
	       $em->persist($profile);
                $em->flush();
		
		Now that doctrine has registered the Profile object, we recuperate all the versions added 
                indicating that they belong to the previously registered Profile object .
		
		foreach ($form->get('versions')->getData() as $vers) {
                 $vers->setProfile($profile);
               $em->persist($vers);
                }
                Then a second flush.
                $em->flush();
		
		*/
		//Here's what works best if you encounter a problem with the above procedure.
	  foreach ($form->get('versions')->getData() as $vers) {
          $vers->setProfile($profile);
          $em->persist($vers);
        }
       
        $em->flush();
	    $profile->getVersions()->clear();
	    $em->persist($profile);
        $em->flush();
		$request->getSession()->getFlashBag()->add('info', 'Enregistrement reussi.');
	  
	  //return $this->redirectToRoute('ai_profile_view', array('id' => $profile->getId()));
	  
	  
    }
	
    return $this->render('AIProfileBundle:Nouveau dossier:add.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  
   
  public function menuAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
	$listProfiles = $em->getRepository('AIProfileBundle:Profile')->findAll();
    return $this->render('AIProfileBundle:Profile:menu.html.twig', array(
      'listProfiles' => $listProfiles
    ));
  }
  
}
