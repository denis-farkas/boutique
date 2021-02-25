<?php
class Factures extends Controller {
    public function __construct() {
        $this->factureModel = $this->model('Facture');
        $this->achatModel = $this->model('Achat');
        $this->commandeModel = $this->model('Commande');
        $this->adresseModel = $this->model('Adresse');
    }

   

    public function afficheFacture($id_facture){
        
        if(!empty($_SESSION['id_user'])) {

            $facture = $this->factureModel->afficheFacture($id_facture);

            if($facture){
                $adresse= $this->adresseModel->adresseFacture($facture->id_adresse);

                $livraison= $this->achatModel->livraisonFacture($facture->id_livraison);
    
                $paiement= $this->achatModel->paiementFacture($facture->id_paiement);
    
                $commandes= $this->commandeModel->listeCommande($facture->id_commande);
    
                    $data = [
                         'facture' => $facture,
                         'adresse' => $adresse,
                         'livraison' => $livraison,
                         'paiement' => $paiement,
                         'commandes' => $commandes
    
                    ];
    
                  
                    $this->view('factures/afficheFacture', $data);
            }else{
               
                $this->view('factures/afficheNofacture');
            }
                     
        }else{
            header('location: ' . WWW_ROOT . 'pages/index'); 
        }
    }

    public function listFactures($id_user){
        
        if(!empty($_SESSION['id_user'])) {   
            $listFactures=$this->factureModel->listFactures($id_user);
            if($listFactures){
                $data=[
                    'listFactures' => $listFactures
                ];
                $this->view('factures/listFactures', $data);
            }else{
                $this->view('factures/afficheNofacture');
            } 
        }else{
            header('location: ' . WWW_ROOT . 'pages/index'); 
        }
    }
    

}



