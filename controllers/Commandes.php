<?php
class Commandes extends Controller {
    public function __construct() {
        $this->commandeModel = $this->model('Commande');
        $this->userModel = $this->model('User');
       
    }

    public function commande() {
        if (!empty($_SESSION['id_user'] )) {

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

        public function deleteCommande($id_detail_commande, $id_commande){

            if (!empty($_SESSION['id_user'])) {
                        
               $delete= $this->commandeModel->deleteCommande($id_detail_commande);

               if(listeCommande($id_commande)){
                 header('location: ' . WWW_ROOT . 'commandes/listeCommande/'.$id_commande);
               }else{
                   $deletepanier= $this->commandeModel->deletePanier($id_commande);
                   if($deletepanier){
                     header('location: ' . WWW_ROOT . 'pages/index');  
                   }else {
                            die('Erreur système.');
                        }
               }                            
            }else{
                header('location:' . WWW_ROOT . 'users/connexion');
            }                  
                         
        }

       



       

}
    
