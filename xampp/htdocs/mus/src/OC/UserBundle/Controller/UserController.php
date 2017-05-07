<?php

namespace OC\UserBundle\Controller;
use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use OC\UserBundle\Form\GivRoleType;
use OC\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class UserController extends BaseController
{
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
        $mesVents = $em->getRepository('OCCommandesBundle:PoidsTarif')->findByNameShop($cetteBout->getName());
		/*foreach($mesVents as $mesVent){
		$thisTab =  $mesVent->getTableau();
		print_r($thisTab);
		
		}
		die();*/
        return $this->render('OCUserBundle:User:ventes.html.twig', array('mesVents' => $mesVents));
		}else{
			return $this->redirect($this->generateUrl('oc_user_amenager'));
		}
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
        $html2pdf->pdf->SetAuthor('DevAndClick');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture DevAndClick');
        $html2pdf->pdf->SetKeywords('facture,devandclick');
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
}
