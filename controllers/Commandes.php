<?php
class Commandes extends Controller {
    public function __construct() {
        $this->commandeModel = $this->model('Commande');
       
    }

    public function commande() {
      

        $article = [
            'id_article'=> '',                     
            'quantite_article'=> '',
            'id_commande'=> ''
            ];

        if(isset($_SESSION['id_user']) && isset($_POST['ajout'])){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $commande= $this->commandeModel->viewCommande($_SESSION['id_user']);
            if($commande){
                    $_SESSION['id_commande']=$commande->id_commande;
                }else{
                $this->commandeModel->ajoutCommande($_SESSION['id_user']);
                $commande= $this->commandeModel->viewCommande($_SESSION['id_user']);
                $_SESSION['id_commande']=$commande->id_commande; 
            }

            $article = [
                'id_article'=> $_POST['id_article'],
                'quantite_article'=> $_POST['quantite'],
                'id_commande'=> $_SESSION['id_commande']
                ];
            
                if ($this->commandeModel->detailCommande($article)) {
                           
                    header('location: ' . WWW_ROOT . 'commandes/listeCommande/'.$_SESSION['id_commande']);
                } else {
                    die('Erreur système.');
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

        public function listeCommandeAttente($id_user){
            if($_SESSION['id_user']==$id_user){
                $commandes= $this->commandeModel->listeCommandeAttente($id_user);
                if($commandes){
                    $data = ['commandes' => $commandes];
                    $this->view('commandes/listeCommande', $data);
                }else{
                    header('location:'. WWW_ROOT . 'pages/panierVide');    ;
                }
                 
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

                    $id_commande=$_POST['id_commande'];
                        
                        if ($this->commandeModel->modifierCommande($id_detail_commande, $article)) {
                           
                            header('location: ' .WWW_ROOT.'commandes/listeCommande/'.$id_commande);
                        } else {
                            die('Erreur système.');
                        }
            }else{
                
                header('location:' . WWW_ROOT . 'users/connexion');
            }                  
                         
        }

        public function deleteDetailCommande($id_detail_commande, $id_commande){

            if (!empty($_SESSION['id_user'])) {
                        
                $this->commandeModel->deleteDetailCommande($id_detail_commande);
                $verify= $this->commandeModel->verifyCommande($id_commande);
                if($verify>0){
                 header('location: ' . WWW_ROOT . 'commandes/listeCommande/'.$id_commande);
               }else{
                     header('location: ' . WWW_ROOT . 'pages/panierVide');  
                   }
               }else{
                header('location:' . WWW_ROOT . 'users/connexion');
            }                  
                         
        }

      

}
    
