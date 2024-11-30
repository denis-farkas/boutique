<?php

class Pages extends Controller {
    private $pageModel;
    public function __construct() {
        $this->pageModel = $this->model('Page');
       
    }
    
    public function index()
    {
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);//module search recherche mots clé
            $promotion= $this->pageModel->promotion();//module promotion affiche 3 articles avec remise
            $meilleureVente = $this->pageModel->meilleureVente();// module meilleurevente affiche 3 articles les plus vendus

            $data = [
                'title' => 'index',
                'promotion' => $promotion,
                'meilleureVente' => $meilleureVente,
                'search' => $search            
            ];
    
            $this->view('main/index', $data);

        }else{
            $promotion= $this->pageModel->promotion();
            $meilleureVente = $this->pageModel->meilleureVente();
            $data = [
                'title' => 'index',
                'promotion' => $promotion,
                'meilleureVente' => $meilleureVente        
            ];
    
            $this->view('main/index', $data);  
        }

    }

    public function result()
    {
        $data = [
            'title' => 'result'
        ];

        $this->view('main/result', $data);
    }

    
    public function termes()
    {
        //page passive pour générer vue condition de ventes
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);

            $data = [
                'title' => 'termes',               
                'search' => $search            
            ];
    
            $this->view('main/termes', $data);

        }else{
           
            $data = [
                'title' => 'termes'         
            ];
    
            $this->view('main/termes', $data);  
        }
    }

    public function merci()
    {
         //page passive pour générer vue remerciement après achat
         if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);

            $data = [
                'title' => 'Merci',               
                'search' => $search            
            ];
    
            $this->view('main/merci', $data);

        }else{
           
            $data = [
                'title' => 'Merci'         
            ];
    
            $this->view('main/merci', $data);  
        }
    }

    public function panierVide()
    { 
         //page passive pour générer vue panier vide
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);

            $data = [
                'title' => 'Panier vide',               
                'search' => $search            
            ];
    
            $this->view('main/panierVide', $data);

        }else{
           
            $data = [
                'title' => 'Panier vide'         
            ];
    
            $this->view('main/panierVide', $data);  
        }
    }

    public function about(){
         //page passive pour générer vue informations de l'entreprise
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);
          

            $data = [
                'title' => 'A propos de nous',
                'search' => $search            
            ];
    
            $this->view('main/about', $data);

        }else{
           
            $data = [
                'title' => 'A propos de nous',        
            ];
    
            $this->view('main/about', $data);  
        }

    }

    public function magasin(){
 //page passive pour générer vue présentation du magasin
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);

            $data = [
                'title' => 'Notre  magasin',               
                'search' => $search            
            ];
    
            $this->view('main/magasin', $data);

        }else{
           
            $data = [
                'title' => 'magasin'         
            ];
    
            $this->view('main/magasin', $data);  
        }
    }

    public function contact()
    {
         //page passive pour générer vue contact pour envoyer un message
         if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);

            $data = [
                'title' => 'Contacts',               
                'search' => $search            
            ];
    
            $this->view('main/contact', $data);

        }else{
           
            $data = [
                'title' => 'magasin'         
            ];
    
            $this->view('main/contact', $data);  
        }
    }

    public function paiement()
    { //page passive pour générer vue moyens de paiement
         if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);

            $data = [
                'title' => 'Paiement',               
                'search' => $search            
            ];
    
            $this->view('main/paiement', $data);

        }else{
           
            $data = [
                'title' => 'Paiement'         
            ];
    
            $this->view('main/paiement', $data);  
        }
    }

    public function livraison()
    { //page passive pour générer vue condition de livraison
        if (isset($_POST['search'])) {
             // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $nom = $_POST['nom'];
            $search= $this->pageModel->search($nom);

            $data = [
                'title' => 'Livraison',               
                'search' => $search            
            ];
    
            $this->view('main/livraison', $data);

        }else{
           
            $data = [
                'title' => 'livraison'         
            ];
    
            $this->view('main/livraison', $data);  
        }
    }
}