<?php
class Achats extends Controller {
    public function __construct() {
        $this->commandeModel = $this->model('Commande');
        $this->userModel = $this->model('User');
        $this->achatModel = $this->model('Achat');
        $this->produitModel = $this->model('Produit');
    }

    public function adresse(){
        if (!empty($_SESSION['id_user'])) {
            $adresses= $this->achatModel->adresse($_SESSION['id_user']);

               $data=[
                   'adresses' => $adresses];

                   $this->view('achats/ajoutAdresse', $data);
            }else{
                header('location:' . WWW_ROOT . 'pages/index');
            }
        }

    public function ajoutAdresse(){

        $adresse = [
            'nom_adresse'=> '',
            'prenom_adresse'=> '',
            'num_rue'=> '',
            'nom_rue'=> '',
            'batiment'=> '',
            'code_postal'=> '',
            'ville'=> '',
            'pays' =>'',
            'id_user'=>'',
            'domicile'=>''
            ];

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajoutAdresse'])){

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $adresse = [
                'nom_adresse'=> $_POST['nom_adresse'],
                'prenom_adresse'=> $_POST['prenom_adresse'],
                'num_rue'=> $_POST['num_rue'],
                'nom_rue'=> $_POST['nom_rue'],
                'batiment'=> $_POST['batiment'],
                'code_postal'=> $_POST['code_postal'],
                'ville'=> $_POST['ville'],
                'pays' =>$_POST['pays'],
                'id_user'=>$_SESSION['id_user'],
                'domicile'=>$_POST['domicile']

                ];

                //modifie utilisateur
                if ($this->achatModel->ajoutAdresse($adresse)) {
                    //Redirect page connexion
                    header('location: ' . WWW_ROOT . 'achats/adresse');
                } else {
                    die('Erreur système.');
                }
        }else{$this->view('achats/ajoutAdresse'); }

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
        if(!empty($_SESSION['id_user'])) {
            $user= $this->userModel->view($_SESSION['id_user']);
            $commandes= $this->commandeModel->listeCommande($_SESSION['id_commande']);
            $adresse= $this->achatModel->adresseFacture($_SESSION['id_adresse']);
            $livraison= $this->achatModel->livraisonFacture($_SESSION['id_livraison']);
            $paiement= $this->achatModel->paiementFacture($_SESSION['id_paiement']);
            $adresseDomicile= $this->achatModel->adresseDomicile($_SESSION['id_user']);

          

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

            $data = [
                'user' => $user,
                'commandes' => $commandes,
                'adresse' => $adresse,
                'livraison' => $livraison,
                'paiement' => $paiement,
                'adresseDomicile' => $adresseDomicile,
                'remise' => $remise,
                'quantite' => $quantite
                
            ];

            /*$enregistrement= $this->achatModel->enregistrementFacture($data);
            if($enregistrement){} aller à merci? ou? ne pas oublier statut commande 1*/




            $this->view('achats/recapitulatif', $data);
        }else{
            header('location: ' . WWW_ROOT . 'pages/index');
        }        
    }


    }
