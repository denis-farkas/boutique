<?php
class Commandes extends Controller {
    public function __construct() {
        $this->commandeModel = $this->model('Commande');
    }

    public function commande() {
        if (!empty($_SESSION['id_user'] && isset($_POST['ajout']))) {

            $article = [
                'id_article'=> '',                     
                'quantite_article'=> '',
                'id_commande'=> ''
                ];

                $panier= $this->commandeModel->viewCommande($_SESSION['id_user']);
                if($panier){
                    // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $article = [
                    'id_article'=> $_POST['id_article'],
                    'quantite_article'=> $_POST['quantite'],
                    'id_commande'=> $panier->id_commande
                    ];
                    
                    if ($this->commandeModel->detailCommande($article)) {
                       
                        header('location: ' . WWW_ROOT . 'commandes/listeCommande/'.$panier->id_commande);
                    } else {
                        die('Erreur système.');
                    }
                }else{
                    $commande= $this->commandeModel->ajoutCommande($_SESSION['id_user']);
                    header('location:' . WWW_ROOT . 'commandes/commande');
                }                  
            
        }else{
            header('location:'. WWW_ROOT . 'users/connexion');
        }
    }

        public function listeCommande($id_commande){
            $commandes= $this->commandeModel->listeCommande($id_commande);
            if($commandes){
                $data = ['commandes' => $commandes];
                $this->view('commandes/listeCommande', $data);
            }else{
                header('location:'. WWW_ROOT . 'users/connexion');  
            }          

        }

        public function modifierCommande($id_detail_commande){

            if (!empty($_SESSION['id_user'] && isset($_POST['modifier']))) {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $article = [
                    'id_article'=> $_POST['id_article'],
                        'quantite_article'=> $_POST['quantite'],
                        'id_commande'=> $_POST['id_commande'] 
                    ];
                        
                        if ($this->commandeModel->modifierCommande($id_detail_commande, $article)) {
                           
                            header('location: ' . WWW_ROOT . 'commandes/listeCommande/'.$article['id_commande']);
                        } else {
                            die('Erreur système.');
                        }
            }else{
                
                header('location:' . WWW_ROOT . 'users/connexion');
            }                  
                         
        }

        public function deleteCommande($id_detail_commande){

            if (!empty($_SESSION['id_user'] && isset($_POST['delete']))) {

                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

                $article = [
                    'id_commande'=> $_POST['id_commande'] 
                    ];
                        
                        if ($this->commandeModel->deleteCommande($id_detail_commande)) {
                           
                            header('location: ' . WWW_ROOT . 'commandes/listeCommande/'.$article['id_commande']);
                        } else {
                            die('Erreur système.');
                        }
            }else{
                
                header('location:' . WWW_ROOT . 'users/connexion');
            }                  
                         
        }

       

}
    
