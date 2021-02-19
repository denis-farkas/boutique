<?php
class Achats extends Controller {
    public function __construct() {
        $this->commandeModel = $this->model('Commande');
        $this->userModel = $this->model('User');
        $this->achatModel = $this->model('Achat');
    }

    public function adresse(){
        if (!empty($_SESSION['id_user'])) {
            $adresses= $this->achatModel->adresse($_SESSION['id_user']);
            if($adresses){
                $data=[
                    'adresses'=>$adresses
                ];

                header('location: ' . WWW_ROOT . 'achats/livraison/'.$data);

            }else{
                    header('location: ' . WWW_ROOT . 'commandes/ajoutAdresse'); 
            }
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
                        header('location: ' . WWW_ROOT . 'achats/livraison');
                    } else {
                        die('Erreur système.');
                    }
                }else{$this->view('achats/ajoutAdresse'); }
                
            }
       

    }
