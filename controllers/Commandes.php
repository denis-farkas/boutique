<?php
class Commandes extends Controller {
    public function __construct() {
        $this->commandeModel = $this->model('Commande');
    }

    public function commande() {
        if (!empty($_SESSION['id_user'] && isset($_POST['ajout'])) {

            $article = [
                'id_article'=> '',                     
                'quantite'=> '',
                'id_commande'=> ''
                ];

                $panier= $this->commandeModel->viewCommande($_POST['$id_user']);
                if($panier){
                    // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $article = [
                    'id_article'=> $_POST['id_article'],
                    'quantite'=> $_POST['quantite'],
                    'id_commande'=> $panier->id_commande;
                    ];
                    
                    header('location:' . WWW_ROOT . 'commandes/ajoutPanier/'.$article);
                }else{
                    $commande= $this->commandeModel->ajoutCommande($_POST['id_user']);
                    header('location:' . WWW_ROOT . 'commandes/commande');
                }                  
            
        }else{
            header('location:'. WWW_ROOT . 'users/connexion');
        }
    }
}