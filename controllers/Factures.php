<?php
class Factures extends Controller {
    public function __construct() {
        $this->factureModel = $this->model('Facture');
        $this->commandeModel = $this->model('Commande');
    }

   

    public function afficheFacture($id_facture){
        
        if(!empty($_SESSION['id_user'])) {   
            $facture=$this->factureModel->afficheFacture($id_facture);
            if($facture){
                $data=[
                    'facture' => $facture
                ];
                $this->view('factures/vueFacture', $data);
            }else{
                die('Erreur système.');   
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
                die('Erreur système.');   
            } 
        }else{
            header('location: ' . WWW_ROOT . 'pages/index'); 
        }
    }
    

}



