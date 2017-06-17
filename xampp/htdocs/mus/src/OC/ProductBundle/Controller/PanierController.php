<?php

namespace OC\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use OC\UserBundle\Entity\User;
use OC\AdressUtilisaBundle\Form\AdresseType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use OC\CommandesBundle\Entity\Commandes;
use OC\CommandesBundle\Entity\Annexe;
use OC\CommandesBundle\Entity\CalculTva;
use OC\CommandesBundle\Entity\PoidsTarif;
use OC\CommandesBundle\Entity\BlocNote;
use Symfony\Component\HttpFoundation\Response;
use OC\AdressUtilisaBundle\Entity\Adresse;

class PanierController extends Controller
{
      public function createAction(Request $request)
    {
		$session = $request->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));
        
        return $this->render('OCProductBundle:Product:create.html.twig', array('articles' => $articles));
    }
    
    public function supprimerAction($id)
    {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier))
        {
            unset($panier[$id]);
            $session->set('panier',$panier);
            $this->get('session')->getFlashBag()->add('success','Article supprimé avec succès');
        }
        
        return $this->redirect($this->generateUrl('oc_product_panier')); 
    }
	
	
    
    public function ajouterAction($id, Request $request)
    {
        
		
		$em = $this->getDoctrine()->getManager();
        $thisProduct = $em->getRepository('OCProductBundle:Product')->find($id);
		$qte = $request->query->get('qte');
		if($qte != null){
		$session = $request->getSession();
        
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier)) {
            if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = 1;
            
            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }
            
        $session->set('panier',$panier);
        
        
        return $this->redirect($this->generateUrl('oc_boutique_menu'));
		}else{
			 return $this->redirectToRoute('oc_product_view', array('id' => $thisProduct->getId()));
		}
    }
	
	public function qteProduitAction(Request $request)
    {
        
		$session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier', array());
        
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('OCProductBundle:Product')->findArray(array_keys($session->get('panier')));
        
        return $this->render('OCProductBundle:Product:qteProduit.html.twig', array('produits' => $produits,
                                                                                             'panier' => $session->get('panier')));
                                                                                             
		
    }
    
	 public function rajoutAction($id, Request $request)
    {
        
		
		$em = $this->getDoctrine()->getManager();
        $thisProduct = $em->getRepository('OCProductBundle:Product')->find($id);
		$qte = $request->query->get('qte');
		if($qte != null){
		$session = $request->getSession();
        
        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');
        
        if (array_key_exists($id, $panier)) {
            if ($request->query->get('qte') != null) $panier[$id] = $request->query->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($request->query->get('qte') != null)
                $panier[$id] = $request->query->get('qte');
            else
                $panier[$id] = 1;
            
            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }
            
        $session->set('panier',$panier);
        
        
        return $this->redirect($this->generateUrl('oc_product_panier'));
		}else{
			 return $this->redirectToRoute('oc_product_view', array('id' => $thisProduct->getId()));
		}
    }
    public function panierAction(Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('panier')) $session->set('panier', array());
        
        $em = $this->getDoctrine()->getManager();
        $produits = $em->getRepository('OCProductBundle:Product')->findArray(array_keys($session->get('panier')));
        
        return $this->render('OCProductBundle:Product:panier.html.twig', array('produits' => $produits,
                                                                                             'panier' => $session->get('panier')));
    }
	
	public function clarificationAction()
    {
        
        return $this->render('OCProductBundle:Product:clarification.html.twig');
    }
    
	/**
     * @Security("has_role('ROLE_USER')")
     */
    public function supAdressAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('OCAdressUtilisaBundle:Adresse')->find($id);
        
        if ($this->container->get('security.token_storage')->getToken()->getUser() != $entity->getUser() || !$entity)
            return $this->redirect ($this->generateUrl ('oc_product_livraison'));
        
        $em->remove($entity);
        $em->flush();
        
        return $this->redirect ($this->generateUrl ('oc_product_livraison'));
    }
     
	/**
     * @Security("has_role('ROLE_USER')")
     */
    public function livraisonAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = new Adresse();
		$user = $this->getUser();
		$form   = $this->get('form.factory')->create(AdresseType::class, $entity);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity->setUser($this->getUser());
                $em->persist($entity);
                $em->flush();
                
                return $this->redirect($this->generateUrl('oc_product_livraison'));
            }
        return $this->render('OCProductBundle:Product:livraison.html.twig', array('user' => $user,
                                                                                                'form' => $form->createView()));
																								
    }
	
	public function facture()
    {
        $em = $this->getDoctrine()->getManager();
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $adresse = $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalHT = 0;
        $totalTTC = 0;
		
       $facturation = $em->getRepository('OCAdressUtilisaBundle:Adresse')->find($adresse['facturation']);
       $livraison = $em->getRepository('OCAdressUtilisaBundle:Adresse')->find($adresse['livraison']);
        $produits = $em->getRepository('OCProductBundle:Product')->findArray(array_keys($session->get('panier')));
		
        foreach($produits as $produit)
        {
            
			
			
			$prixHT = ($produit->getPrix() * $panier[$produit->getId()]);
			$poidsTot = ($produit->getPoids() * $panier[$produit->getId()]);
            $prixTTC = ($produit->getPrix() * ($panier[$produit->getId()])*$produit->getTva() + $produit->getPrix() * $panier[$produit->getId()]);
            $totalHT += $prixHT;
            $totalTTC += $prixTTC;
            
            if (!isset($commande['tva']['%'.$produit->getTva()]))
                $commande['tva']['%'.($produit->getTva())*100] = round($prixTTC - $prixHT,2);
            else
                $commande['tva']['%'.($produit->getTva())*100] += round($prixTTC - $prixHT,2);
            
            $commande['produit'][$produit->getId()] = array('reference' => $produit->getNom(),
			                                                'id' => $produit->getId(),
															'vendeur' => $produit->getBoutique()->getName(),
                                                            'quantite' => $panier[$produit->getId()],
                                                            'prixHT' => round($produit->getPrix(),2),
															'poidsTot' => round($produit->getPoids(),2),
                                                            'prixTTC' => round($produit->getPrix() * ($panier[$produit->getId()])*$produit->getTva() + $produit->getPrix() * $panier[$produit->getId()],2));
                                                
		 
		 }  
        
       $commande['livraison'] = array('prenom' => $livraison->getPrenom(),
                                    'nom' => $livraison->getNom(),
                                    'telephone' => $livraison->getTelephone(),
                                    'adresse' => $livraison->getAdresse(),
                                    'cp' => $livraison->getCp(),
									'ville' => $facturation->getVille());
                             
       $commande['facturation'] = array('prenom' => $facturation->getPrenom(),
                                    'nom' => $facturation->getNom(),
                                    'telephone' => $facturation->getTelephone(),
                                    'adresse' => $facturation->getAdresse(),
                                    'cp' => $facturation->getCp(),
									'ville' => $facturation->getVille());
                                   
        $commande['prixHT'] = round($totalHT,2);
        $commande['prixTTC'] = round($totalTTC,2);
        $commande['token'] = bin2hex(random_bytes(20));
        return $commande;
		
   }
     
    public function prepareCommande()
    {
        
		
		$session = $this->get('request_stack')->getCurrentRequest()->getSession();
        $em = $this->getDoctrine()->getManager();
		$produits = $em->getRepository('OCProductBundle:Product')->findArray(array_keys($session->get('panier')));
        
        if (!$session->has('commande'))
            $commande = new Commandes();
        else
            $commande = $em->getRepository('OCCommandesBundle:Commandes')->find($session->get('commande'));
        
        $commande->setDate(new \DateTime());
        $commande->setUser($this->container->get('security.token_storage')->getToken()->getUser());
        $commande->setValider(0);
        $commande->setReference(0);
		 foreach($produits as $produit)
        {
		$commande->setCommande($this->facture());
        if (!$session->has('commande')) {
            $em->persist($commande);
            $session->set('commande',$commande);
        }
        
        $em->flush();
        }
        return new Response($commande->getId());
    }
	
	 public function setLivraisonOnSession()
    {
        $session = $this->get('request_stack')->getCurrentRequest()->getSession();
        
        if (!$session->has('adresse')) $session->set('adresse',array());
        $adresse = $session->get('adresse');
        
        if ($this->get('request_stack')->getCurrentRequest()->request->get('livraison') != null && $this->get('request_stack')->getCurrentRequest()->request->get('facturation') != null)
        {
            $adresse['livraison'] = $this->get('request_stack')->getCurrentRequest()->request->get('livraison');
            $adresse['facturation'] = $this->get('request_stack')->getCurrentRequest()->request->get('facturation');
        } else {
            return $this->redirect($this->generateUrl('oc_product_validation'));
        }
        
        $session->set('adresse',$adresse);
        return $this->redirect($this->generateUrl('oc_product_validation'));
    }
    
    public function validationAction()
    {
		
             $em = $this->getDoctrine()->getManager();
			 $tarificati = $em->getRepository('OCBoutiqueBundle:Tarification')->find(1);
			 if(!$tarificati == null ){
			if ($this->get('request_stack')->getCurrentRequest()->getMethod() == 'POST')
			
            $this->setLivraisonOnSession();
            $commande = $this->prepareCommande();	
        
        
		$laCommande = $em->getRepository('OCCommandesBundle:Commandes')->find($commande->getContent());
		$content = $laCommande->getCommande();
		$thosProducts = $content['produit'];
		$cettAnnexes = $em->getRepository('OCCommandesBundle:Annexe')->findByCommande($laCommande);
		if($cettAnnexes==null){
		foreach($thosProducts as $thosProduct){
		$annexes = new Annexe();
		$idProd = $thosProduct['id'];
		$laQ = $thosProduct['quantite'];
		$thisP = $em->getRepository('OCProductBundle:Product')->find($idProd);
		$lePoid = $thosProduct['poidsTot'];
	    $thisBout = $thisP->getBoutique();
		$idB = $thisBout->getId();
		$annexes->setCommande($laCommande);
		$annexes->setCasePoids($lePoid*$laQ);
		$annexes->setCaseIdB($idB);
		$annexes->setCaseTva(($thisP->getTva())*100);
		$annexes->setValeurTva(($thisP->getTva())*($thosProduct['prixHT'])*($thosProduct['quantite']));
		$annexes->setCasePrix($thosProduct['prixTTC']);
		$annexes->setCaseName($thosProduct['reference']);
		$annexes->setCaseQte($laQ);
		if(!$thisP->getTaille()== null){
		$annexes->setTaille($thisP->getTaille());}
		if(!$thisP->getCouleur()== null){
		$annexes->setCouleur($thisP->getCouleur());}
		$em->persist($annexes);
		}
		
		$em->flush();
		}
		$myCommande = $em->getRepository('OCCommandesBundle:Commandes')->find($commande->getContent());
		$calculPs = $em->getRepository('OCCommandesBundle:Annexe')->getPbyBout($myCommande);
		$calculTvas = $em->getRepository('OCCommandesBundle:Annexe')->calCulTva($myCommande);
		 $poidsTarrr = $em->getRepository('OCCommandesBundle:PoidsTarif')->findByCommande($myCommande);  
		
		 if($poidsTarrr==null){
			 foreach($calculTvas as $calculTva){	
                       $mesTva = new CalculTva();
					   $mesTva->setCaseRef($calculTva['caseTva']);
					   $mesTva->setCaseValue(round($calculTva['totalTva'], 2));	
					   $mesTva->setCommande($myCommande);
					   $em->persist($mesTva);
		   }
			 
		foreach($calculPs as $calculP){
			
			$poidsTarifs = new PoidsTarif();
			
			$thisBoutt = $em->getRepository('OCBoutiqueBundle:Boutique')->find($calculP['caseIdB']);
			$leDitP = $em->getRepository('OCCommandesBundle:Annexe')->getNameP($calculP['caseIdB'], $myCommande);
		    $poidsTarifs->setCommande($myCommande);
			
		    $poidsTarifs->setCaseP($calculP['totalP']);
			$poidsTarifs->setCaseMonney(round($calculP['totalMo'], 2));
			$poidsTarifs->setLivraison($content['livraison']);
			$poidsTarifs->setFacturation($content['facturation']);
			$poidsTarifs->setNameShop($thisBoutt->getName());
			$poidsTarifs->setDate(new \DateTime());
			
			$poidsTarifs->setTableau($leDitP);
			
			$poidsTarifs->setEmailShop($thisBoutt->getUser()->getEmail());
			
		    if($calculP['totalP'] > 0.01 && $calculP['totalP'] <= 0.99 ){
		    $poidsTarifs->setCaseTar($tarificati->getVal1());
			$poidsTarifs->setTotMonney(round(($calculP['totalMo']+ $tarificati->getVal1()), 2));
		   }elseif($calculP['totalP'] > 0.99 && $calculP['totalP'] <= 1.99 ){
		    $poidsTarifs->setCaseTar($tarificati->getVal2());
			$poidsTarifs->setTotMonney(round(($calculP['totalMo']+ $tarificati->getVal2()), 2));
		   }elseif($calculP['totalP'] > 1.99 && $calculP['totalP'] <= 2.99 ){
		    $poidsTarifs->setCaseTar($tarificati->getVal3());
			$poidsTarifs->setTotMonney(round(($calculP['totalMo']+ $tarificati->getVal3()), 2));
		   }elseif($calculP['totalP'] > 2.99 && $calculP['totalP'] <= 4.99 ){
		    $poidsTarifs->setCaseTar($tarificati->getVal4());
			$poidsTarifs->setTotMonney(round(($calculP['totalMo']+ $tarificati->getVal4()), 2));
		   }elseif($calculP['totalP'] > 4.99 && $calculP['totalP'] <= 6.99 ){
		    $poidsTarifs->setCaseTar($tarificati->getVal5());
			$poidsTarifs->setTotMonney(round(($calculP['totalMo']+ $tarificati->getVal5()), 2));
		   }elseif($calculP['totalP'] > 6.99 && $calculP['totalP'] <= 9.99 ){
		    $poidsTarifs->setCaseTar($tarificati->getVal6());
			$poidsTarifs->setTotMonney(round(($calculP['totalMo']+ $tarificati->getVal6()), 2));
		
		   }elseif($calculP['totalP'] > 9.99 && $calculP['totalP'] <= 14.99 ){
		    $poidsTarifs->setCaseTar($tarificati->getVal7());
			$poidsTarifs->setTotMonney(round(($calculP['totalMo']+ $tarificati->getVal7()), 2));
			
		   }elseif($calculP['totalP'] > 14.99 && $calculP['totalP'] <= 30 ){
		    $poidsTarifs->setCaseTar($tarificati->getVal8());
			$poidsTarifs->setTotMonney(round(($calculP['totalMo']+ $tarificati->getVal8()), 2));
			
		   }else{
			  return $this->redirect($this->generateUrl('oc_product_clarification'));
		   }
					   $em->persist($poidsTarifs);
			}		   
			
		    
		   
		$em->flush();
		}
		
		$clapCommande = $em->getRepository('OCCommandesBundle:Commandes')->find($commande->getContent());
		$calculTarifs = $em->getRepository('OCCommandesBundle:PoidsTarif')->sommationTarif($clapCommande);
		$ceContenu = $clapCommande->getCommande();
		foreach($calculTarifs as $calculTarif){
		$clapCommande->setTotTarif(round($calculTarif['totalTarif'], 2));
		$calc=$calculTarif['totalTarif']+$ceContenu['prixTTC'];
		
		$clapCommande->setTotalGlob(round($calc, 2));
		}
		$em->flush();
		$thisCommande = $em->getRepository('OCCommandesBundle:Commandes')->find($commande->getContent());
		$ParVendeurs = $em->getRepository('OCCommandesBundle:PoidsTarif')->findByCommande($thisCommande);
		$tvas = $em->getRepository('OCCommandesBundle:CalculTva')->findByCommande($thisCommande);
		
		
        return $this->render('OCProductBundle:Product:validation.html.twig', array('thisCommande' => $thisCommande ,
		                                                                           'ParVendeurs' => $ParVendeurs,
																				   'tvas' => $tvas
		 ));
		                                                                           
		}else{
			 return $this->redirectToRoute('oc_core_nous');
		}
        
   
   }
}
