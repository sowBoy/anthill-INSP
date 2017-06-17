<?php

namespace OC\RechercheBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\RechercheBundle\Form\RechercheAnType;
use OC\RechercheBundle\Form\RechercheJobType;
use OC\RechercheBundle\Form\RechercheBoType;
use OC\RechercheBundle\Form\RechercheCvType;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\HttpFoundation\Response;


class RechercheController extends Controller
{
    public function annonceAction(Request $request)
    {
     
     $form   = $this->get('form.factory')->create(RechercheAnType::class);
     return $this->render('OCRechercheBundle:Recherche:annonce.html.twig', array(
      'form' => $form->createView(),
    ));
    }
	
	public function jobAction(Request $request)
    {
     
     $form   = $this->get('form.factory')->create(RechercheJobType::class);
     return $this->render('OCRechercheBundle:Recherche:job.html.twig', array(
      'form' => $form->createView(),
    ));
    }
	
	public function boutiqueAction(Request $request)
    {
     
     $form   = $this->get('form.factory')->create(RechercheBoType::class);
     return $this->render('OCRechercheBundle:Recherche:boutique.html.twig', array(
      'form' => $form->createView(),
    ));
    }
	
	public function cvAction(Request $request)
    {
     
     $form   = $this->get('form.factory')->create(RechercheCvType::class);
     return $this->render('OCRechercheBundle:Recherche:cv.html.twig', array(
      'form' => $form->createView(),
    ));
    }
	
	 public function annonceTraitemAction(Request $request) 
    {
        $form   = $this->get('form.factory')->create(RechercheAnType::class);
        
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
           $em = $this->getDoctrine()->getManager();
           $listAnnonces = $em->getRepository('OCAnnonceBundle:Annonce')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('Désolé aucun resultat.');
        }
        
        return $this->render('OCAnnonceBundle:Annonce:look.html.twig', array('listAnnonces' => $listAnnonces));
    }
	
	public function jobTraitemAction(Request $request) 
    {
        $form   = $this->get('form.factory')->create(RechercheJobType::class);
        
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
           $em = $this->getDoctrine()->getManager();
           $listAdverts = $em->getRepository('OCPlatformBundle:Advert')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('Désolé aucun resultat.');
        }
        
       return $this->render('OCPlatformBundle:Advert:look.html.twig', array('listAdverts' => $listAdverts));
    }
	
	public function cvTraitemAction(Request $request) 
    {
        $form   = $this->get('form.factory')->create(RechercheCvType::class);
        
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
           $em = $this->getDoctrine()->getManager();
           $listTheResumes = $em->getRepository('OCOnlineCvBundle:TheResume')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('Désolé aucun resultat.');
        }
        
        return $this->render('OCOnlineCvBundle:TheResume:menu.html.twig', array('listTheResumes' => $listTheResumes));
    }
	
	public function boutiqueTraitemAction(Request $request) 
    {
        $form   = $this->get('form.factory')->create(RechercheBoType::class);
        
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
           $em = $this->getDoctrine()->getManager();
           $listBoutiques = $em->getRepository('OCBoutiqueBundle:Boutique')->recherche($form['recherche']->getData());
        } else {
            throw $this->createNotFoundException('Désolé aucun resultat.');
        }
        
        return $this->render('OCBoutiqueBundle:Boutique:menu.html.twig', array('listBoutiques' => $listBoutiques,));
    }
}
