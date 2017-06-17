<?php

namespace OC\UserBundle\Controller;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\UserBundle\Form\GivRoleType;
use OC\UserBundle\Form\UtilisationType;
use OC\UserBundle\Form\UtilisationEditType;
use OC\UserBundle\Entity\User;
use OC\UserBundle\Entity\Utilisation;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends BaseController
{
    
	/**
     * @Security("has_role('ROLE_ADMIN')")
     */
	public function rolesAction(Request $request)
    {
        
    $form   = $this->get('form.factory')->create(GivRoleType::class);
   
    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
		$email = $form["email"]->getData();
		 $em = $this->getDoctrine()->getManager();
		$user = $em->getRepository('OCUserBundle:User')->findOneByEmail($email);
		if(!$user == null){
		$user->setRoles(array('ROLE_ADMIN'));
      $em->flush();
	  return $this->redirectToRoute('oc_platform_home');
	  }else{
		 return $this->redirectToRoute('oc_platform_home'); 
	  }
	  
	  
    }
	
    return $this->render('OCUserBundle:User:roles.html.twig', array(
      'form' => $form->createView(),
    ));
    }
	
	public function factureAction()
    {
        $em = $this->getDoctrine()->getManager();
        $factures = $em->getRepository('OCCommandesBundle:Commandes')->byFacture($this->getUser());
        
        return $this->render('OCUserBundle:User:facture.html.twig', array('factures' => $factures));
    }
	
    /**
     * @Security("has_role('ROLE_SELLER')")
     */
	public function ventesAction()
    {
        $em = $this->getDoctrine()->getManager();
		$cetteBout = $this->getUser()->getBoutique();
		if(!$cetteBout == null){
		$mesVents = $em->getRepository('OCCommandesBundle:PoidsTarif')->findByValidAndNameS(true, $cetteBout->getName());
		
        return $this->render('OCUserBundle:User:ventes.html.twig', array('mesVents' => $mesVents));
		}else{
			return $this->redirect($this->generateUrl('oc_user_amenager'));
		}
    }
	public function depotAction()
    {
        $em = $this->getDoctrine()->getManager();
        $mesAnnonces = $em->getRepository('OCAnnonceBundle:Annonce')->findByUser($this->getUser());
        $mesCvs = $em->getRepository('OCOnlineCvBundle:TheResume')->findByUser($this->getUser());
		$mesJobs = $em->getRepository('OCPlatformBundle:Advert')->findByUser($this->getUser());
        return $this->render('OCUserBundle:User:depot.html.twig', array('mesAnnonces' => $mesAnnonces,
		                                                                'mesCvs' => $mesCvs, 
																		'mesJobs' => $mesJobs));
    }
	
    public function facturePDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('OCCommandesBundle:Commandes')->findOneBy(array('user' => $this->getUser(),
                                                                                     'valider' => 1,
                                                                                     'id' => $id));
        
        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('oc_user_facutre'));
        }
        
        $html = $this->renderView('OCUserBundle:User:facturePDF.html.twig', array('facture' => $facture));
        
        $html2pdf = new \Html2Pdf_Html2Pdf('P','A4','fr');
        $html2pdf->pdf->SetAuthor('Entremus');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture Entremus');
        $html2pdf->pdf->SetKeywords('facture,entremus');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        $html2pdf->Output('Facture.pdf');
         
        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');
        
        return $response;
    }
	
	public function shopAction()
  {
    $em = $this->getDoctrine()->getManager();
	$boutique = $em->getRepository('OCBoutiqueBundle:Boutique')->findOneByUser($this->getUser());
	if(!$boutique == null){
	$listProduits = $em->getRepository('OCProductBundle:Product')->findByBoutique($boutique);
	
    return $this->render('OCBoutiqueBundle:Boutique:view.html.twig', array(
      'boutique'           => $boutique,
	  'listProduits'           => $listProduits,
	  
    ));
	}else{
		 return $this->redirect($this->generateUrl('oc_user_amenager'));
	}
  }
  public function amenagerAction()
  {
    
	
    return $this->render('OCUserBundle:User:amenager.html.twig');
  }
  
  public function lookinAction()
  {
    $em = $this->getDoctrine()->getManager();
	
	$utilisat = $em->getRepository('OCUserBundle:Utilisation')->findOneByValid(true);
    return $this->render('OCUserBundle:User:lookin.html.twig', array(
      'utilisat'           => $utilisat ));
  }
  
  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function utilisationAction(Request $request)
  {
   

    $utlisat = new Utilisation();
    $form   = $this->get('form.factory')->create(UtilisationType::class, $utlisat);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
     
      $em = $this->getDoctrine()->getManager();
      $em->persist($utlisat);
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'enregistrée.');

      return $this->redirectToRoute('oc_platform_home');
    }

    return $this->render('OCUserBundle:User:utilisation.html.twig', array(
      'form' => $form->createView(),
    ));
  }
  /**
   * @Security("has_role('ROLE_ADMIN')")
   */
  public function editAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
	$utilisat = $em->getRepository('OCUserBundle:Utilisation')->findOneByValid(true);
	$form = $this->get('form.factory')->create(UtilisationEditType::class, $utilisat);

    if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
     
      
      $em->flush();

      $request->getSession()->getFlashBag()->add('notice', 'modifiée.');

      return $this->redirectToRoute('oc_platform_home');
    }

    return $this->render('OCUserBundle:User:edit.html.twig', array(
      'utilisat' => $utilisat,
      'form'   => $form->createView(),
    ));
  }
}
