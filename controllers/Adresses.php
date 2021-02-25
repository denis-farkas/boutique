<?php

    class Adresses extends Controller {
    
        public function __construct() {
        $this->adresseModel = $this->model('Adresse');      
        }


        public function adresse(){
            if (!empty($_SESSION['id_user'])) {
                $adresses= $this->adresseModel->adresse($_SESSION['id_user']);

                $data=[
                    'adresses' => $adresses];

                    $this->view('adresses/ajoutAdresse', $data);
                }else{
                    header('location:' . WWW_ROOT . 'pages/index');
                }
            }

        public function listAdresses(){
            if (!empty($_SESSION['id_user'])) {
                $adresses= $this->adresseModel->adresse($_SESSION['id_user']);

                $data=[
                    'adresses' => $adresses];

                    $this->view('adresses/listAdresses', $data);
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
                    if ($this->adresseModel->ajoutAdresse($adresse)) {
                        //Redirect page connexion
                        header('location: ' . WWW_ROOT . 'achats/ajoutAdresse');
                    } else {
                        die('Erreur système.');
                    }
            }else{$this->view('adresses/ajoutAdresse'); }

        }

        public function addAdresse(){

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

            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['addAdresse'])){

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

                   
                    if ($this->adresseModel->ajoutAdresse($adresse)) {
                  
                        header('location: ' . WWW_ROOT . 'adresses/listAdresses');
                    } else {
                        die('Erreur système.');
                    }
            }else{$this->view('adresses/listAdresses'); }

        }
  

    

        public function modifierAdresse($id_adresse){
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['modifierAdresse'])){
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
                    'domicile'=>$_POST['domicile'],
                    'id_adresse' =>$id_adresse

                    ];

                    if ($this->adresseModel->modifierAdresse($adresse)) {
                        //Redirect page connexion
                        header('location: ' . WWW_ROOT . 'adresses/listAdresses');
                    } else {
                        die('Erreur système.');
                    }
            }else{
                $adresse= $this->adresseModel->adresseFacture($id_adresse);
                $data = [
                    'adresse'=> $adresse
                    ];

                $this->view('adresses/modifierAdresse', $data); }

        }
    

        public function effacerAdresse($id_adresse){
            if (!empty($_SESSION['id_user'])) {
                $this->adresseModel->effacerAdresse($id_adresse);
                header('location: ' . WWW_ROOT . 'adresses/listAdresses'); 
            }
        }
}