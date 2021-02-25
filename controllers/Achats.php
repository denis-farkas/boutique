<?php
class Achats extends Controller {
   
    public function __construct() {
        $this->commandeModel = $this->model('Commande');
        $this->userModel = $this->model('User');
        $this->achatModel = $this->model('Achat');
        $this->produitModel = $this->model('Produit');
        $this->factureModel = $this->model('Facture');
        $this->adresseModel = $this->model('Adresse');
    }

   

    public function choisirAdresse(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['choisirAdresse'])){
            $_SESSION['id_adresse']=$_POST['id_adresse'];
            header('location: ' . WWW_ROOT . 'achats/livraison');
        }
    }


    public function livraison(){

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajoutLivraison'])){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $_SESSION['id_livraison']=$_POST['id_livraison'];

            header('location: ' . WWW_ROOT . 'achats/payer');

        }elseif(!empty($_SESSION['id_user'])) {

                $livraisons= $this->achatModel->listLivraisons();

                   $data=[
                       'livraisons' => $livraisons];

                    $this->view('achats/choixLivraison', $data);
        }else{
            header('location: ' . WWW_ROOT . 'pages/index');
        }
    }


    public function payer(){
        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajoutPaiement'])){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $_SESSION['id_paiement']=$_POST['id_paiement'];

            header('location: ' . WWW_ROOT . 'achats/recapitulatif');

        }elseif(!empty($_SESSION['id_user'])) {

                $paiements= $this->achatModel->listPaiements();

                   $data=[
                       'paiements' => $paiements];

                    $this->view('achats/choixPaiement', $data);
        }else{
            header('location: ' . WWW_ROOT . 'pages/index');
        }

    }

    public function recapitulatif(){
        $statut= $this->commandeModel->verifierStatutCommande($_SESSION['id_commande']);
        if(!empty($_SESSION['id_user']) && $statut->statut_commande==0) {
            $user= $this->userModel->view($_SESSION['id_user']);
            $commandes= $this->commandeModel->listeCommande($_SESSION['id_commande']);
            $adresse= $this->adresseModel->adresseFacture($_SESSION['id_adresse']);
            $livraison= $this->achatModel->livraisonFacture($_SESSION['id_livraison']);
            $paiement= $this->achatModel->paiementFacture($_SESSION['id_paiement']);
            $adresseDomicile= $this->adresseModel->adresseDomicile($_SESSION['id_user']);

            $data = [
                'user' => $user,
                'commandes' => $commandes,
                'adresse' => $adresse,
                'livraison' => $livraison,
                'paiement' => $paiement,
                'adresseDomicile' => $adresseDomicile
            ];
          
            $remise=0;
            $quantite=0;
            
            foreach($data['commandes'] as $commande){
                $remise= $remise + (($commande->prix_produit -(($commande->prix_produit*$commande->remise)/100))*$commande->quantite_article); 
                $quantite= $quantite + $commande->quantite_article;                
            }

            $total= $remise + $data['livraison']->prix_livreur;

            $data = [
                'user' => $user,
                'commandes' => $commandes,
                'adresse' => $adresse,
                'livraison' => $livraison,
                'paiement' => $paiement,
                'adresseDomicile' => $adresseDomicile,
                'remise' => $remise,
                'quantite' => $quantite,
                'paiement' => $paiement,
                'total' => $total
                
            ];

            $this->factureModel->ajoutFacture($data);
            $this->commandeModel->statutCommande($_SESSION['id_commande']);

            $this->view('achats/recapitulatif', $data);
        }else{
            header('location: ' . WWW_ROOT . 'pages/index');
        }        
    }


}
