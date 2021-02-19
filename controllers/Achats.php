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
                    header('location: ' . WWW_ROOT . 'achats/livraison');
                } else {
                    die('Erreur système.');
                }
        }else{$this->view('achats/ajoutAdresse'); }
            
    }

    public function choisirAdresse(){

    }
    

    public function livraison($data){
        if (!empty($_SESSION['id_user'])) {

            $data = ['livraison' => ''];
        
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajoutLivraison'])){
        
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    
                   
            $data = [
                'livraison'=> $_POST['id_livraison']
                ];
                header('location: ' . WWW_ROOT . 'achats/payer/'.$data);    
        }else{
            $this->view('achats/ajoutLivraison',$data); }
        }else{
            header('location: ' . WWW_ROOT . 'pages/index');
        }  
    }

    public function payer($data){
        if (!empty($_SESSION['id_user'])) {

            $data = ['payer' => ''];
        
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajoutPayer'])){
        
             $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
                    
                   
            $data = [
                'payer'=> $_POST['id_payer']
                ];
                header('location: ' . WWW_ROOT . 'pages/result/'.$data);    
        }else{
            $this->view('achats/ajoutPayer',$data); }
        }else{
            header('location: ' . WWW_ROOT . 'pages/index');
        }  

    }

                  
                
   
       

    }
