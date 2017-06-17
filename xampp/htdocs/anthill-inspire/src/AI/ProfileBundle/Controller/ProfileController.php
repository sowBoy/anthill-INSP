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
		Théoriquement voici ce qui est censé marcher:
		
		On supprime d'abord la liste des versions du rajoutés dans le formulaire
		$profile->getVersions()->clear();
		On persite puis on flush
	    $em->persist($profile);
        $em->flush();
		
		Maintenant que doctrine a enregistré l'objet Profile, on recupère toutes les versions rajouté en indiquant
		qu'elles appartiennent bien à l'objet Profile precedemment enregistré et on procède à un second flush.
		
		foreach ($form->get('versions')->getData() as $vers) {
          $vers->setProfile($profile);
          $em->persist($vers);
        }
       
        $em->flush();
		
		*/
		//Voici ce qui marche nickel si vous rencontrez un problème avec la procédure ci-dessus.
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
	
    return $this->render('AIProfileBundle:Profile:add.html.twig', array(
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
