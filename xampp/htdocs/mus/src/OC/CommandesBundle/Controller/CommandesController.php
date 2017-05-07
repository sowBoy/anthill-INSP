<?php
namespace OC\CommandesBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authorization\AuthorizationChecker;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use OC\AdressUtlisaBundle\Entity\Adresse;
use OC\CommandesBundle\Entity\Commandes;
use OC\ProductBundle\Entity\Product;
class CommandesController extends Controller
{
    /*
     * Cette methode remplace l'api banque.
     */
    public function validationCommandeAction($id)
    {
        
		$session = $this->get('request_stack')->getCurrentRequest()->getSession();
	    $panier = $session->get('panier');
		$em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('OCCommandesBundle:Commandes')->find($id);
        if (!$commande || $commande->getValider() == 1)
            throw $this->createNotFoundException('La commande n\'existe pas');
        
        $commande->setValider(1);
        $commande->setReference($this->container->get('setNewReference')->reference()); //Service
		
		$contenu = $commande->getCommande();
		$cesProduits = $contenu['produit'];
		foreach($cesProduits as $cesProduit){
	    $theId = $cesProduit['id'];
		$ceProduit = $em->getRepository('OCProductBundle:Product')->find($theId );	
		$oldQuantity = $ceProduit->getQuantity(); 
		$quantite = $cesProduit['quantite'];
		$ceProduit->setQuantity($oldQuantity-$quantite);
		
		}
        $em->flush();   
        
        
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('commande');
        
        $this->get('session')->getFlashBag()->add('success','Votre commande est validé avec succès');
        return $this->redirect($this->generateUrl('oc_user_facture'));
    }
}