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
   
    public function validationCommandeAction($id)
    {
        
		$session = $this->get('request_stack')->getCurrentRequest()->getSession();
	    $panier = $session->get('panier');
		$em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('OCCommandesBundle:Commandes')->find($id);
        if (!$commande || $commande->getValider() == 1)
            throw $this->createNotFoundException('La commande n\'existe pas');
		
        /*\Stripe\Stripe::setApiKey("sk_live_Cmqgp8o4UZdTeKVXGX5qVkwY");

				$token = $_POST['stripeToken'];
				$charge = \Stripe\Charge::create(array(
				  "amount" => 100*(number_format($commande->getTotalGlob(), 2, ',', ' ')),
				  "currency" => "eur",
				  "description" => "Charge",
				  "source" => $token,
				));*/
        $commande->setValider(1);
        $commande->setReference($this->container->get('setNewReference')->reference()); 
		$thisPoidsTars = $em->getRepository('OCCommandesBundle:PoidsTarif')->findByCommande($commande);
		foreach($thisPoidsTars as $thisPoidsTar){
			$thisPoidsTar->setValid(true);
			
			$message = new \Swift_Message(
      'Nouvelle vente',
      'Vous venez d\'enregistrer une nouvelle commande.RDV sur vôtre espace utilisateur(mes ventes) pour commencer à préparer la livraison.'
    );

    $message
      ->addTo($thisPoidsTar->getEmailShop())
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($message);

		}
		
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
		
		$messageAdmin = new \Swift_Message(
      'Nouvelle vente',
      ' Nouvelle commande sur votre site.'
    );

    $messageAdmin
      ->addTo('anthillinspire@entremus.com')
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($messageAdmin);
	
	$messageClient = new \Swift_Message(
      'Confirmation de commande',
      ' Nous vous confimons que votre commande a bien été prise en compte.Les vendeurs concernés s\'activeront pour vous livrer dans les delai indiqués.Vous pouvez 
	  à tout moment télécharger les PDF de vos factures depuis votre espace utilisateur entremus.com en cliquant sur commandes.
	  
	  Cordialement
	  L\'équipe Entremus'
    );

    $messageClient
      ->addTo($commande->getUser()->getEmail())
      ->addFrom('anthillinspire@entremus.com')
    ;

    $this->get('mailer')->send($messageClient);
		
        $this->get('session')->getFlashBag()->add('success','Votre commande est validé avec succès');
        return $this->redirect($this->generateUrl('oc_user_facture'));
    }
	
	/**
     * @Security("has_role('ROLE_ADMIN')")
     */
	public function lesCommandesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lesCommands = $em->getRepository('OCCommandesBundle:Commandes')->lesCommand();
        
        return $this->render('OCCommandesBundle:Commandes:lesCommandes.html.twig', array('lesCommands' => $lesCommands));
    }
}