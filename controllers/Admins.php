<?php
class Admins extends Controller {
    public function __construct() {
        $this->adminModel = $this->model('Admin');
    }    
  

    public function uploadImage(){
        $this->view('admins/uploadImage');  
    }

    public function crudUsers(){
        if (!empty($_SESSION['id_user']) && $_SESSION['is_admin']==1){
           $users = $this->adminModel->crudUsers();

        $data = [
            'users' => $users
        ];

        $this->view('admins/crudUsers', $data);
        } else {
                 header('location:' . WWW_ROOT . 'pages/index');
            }
        }

    public function vueProfil($id){
        if (!empty($_SESSION['id_user']) && $_SESSION['is_admin']==1){
            $user = $this->adminModel->view($id);
 
         $data = [
             'user' => $user
         ];
 
         $this->view('admins/vueProfil', $data);
         } else {
                  header('location:' . WWW_ROOT . 'pages/index');
             }
         }
  
         public function crudArticles(){
            if (!empty($_SESSION['id_user']) && $_SESSION['is_admin']==1){
               $articles = $this->adminModel->crudArticles();
    
            $data = [
                'articles' => $articles
            ];
    
            $this->view('admins/crudArticles', $data);
            } else {
                     header('location:' . WWW_ROOT . 'pages/index');
                }
            }

            public function crudProduits(){
                if (!empty($_SESSION['id_user']) && $_SESSION['is_admin']==1){
                   $produits = $this->adminModel->crudProduits();
        
                $data = [
                    'produits' => $produits
                ];
        
                $this->view('admins/crudProduits', $data);
                } else {
                         header('location:' . WWW_ROOT . 'pages/index');
                    }
                }
                 
    
    public function formArticle($id_article){
        if (!empty($_SESSION['id_user']) && $_SESSION['is_admin']==1){
        $article = $this->adminModel->viewArticle($id_article);
        $data = [
            'article' => $article];

        $this->view('admins/formArticle', $data);
        } else {
                header('location:' . WWW_ROOT . 'pages/index');
            }
        }

    public function updateArticle(){
        $article = [
            'id_article'=> '',                     
            'quantite'=> '',
            'remise'=> ''
            ];

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $article = [
                'id_article'=> $_POST['id_article'],
                'quantite'=> $_POST['quantite'],
                'remise'=> $_POST['remise']
                ];

                //modifie utilisateur
                if ($this->adminModel->updateArticle($article)) {
                    //Redirect page connexion
                    header('location: ' . WWW_ROOT . 'admins/crudArticles');
                } else {
                    die('Erreur système.');
                }
            }else{$this->view('pages/home'); }
            
        }
        
        public function ajoutArticle(){

            $produits = $this->adminModel->crudProduits();

            $article = [
                'produits' =>'',
                'id_article'=> '',
                'id_produit'=> '',
                'id_taille'=> '',
                'id_couleur'=> '',
                'date_registre'=> '',
                'remise'=> '',
                'quantite'=> ''
                ];
    
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])){
    
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
              
                $article = [
                    'id_article'=> $_POST['id_article'],
                    'id_produit'=> $_POST['id_produit'],
                    'id_taille'=> $_POST['id_taille'],
                    'id_couleur'=> $_POST['id_couleur'],
                    'date_registre'=> date("Y-m-d"),
                    'remise'=> $_POST['remise'],
                    'quantite'=> $_POST['quantite']
                    ];
    
                    
                    if ($this->adminModel->ajoutArticle($article)) {
                       
                        header('location: ' . WWW_ROOT . 'admins/crudArticles');
                    } else {
                        die('Erreur système.');
                    }
                }else{
                    $produits = $this->adminModel->crudProduits();
                    $data = ['produits' => $produits];
                    $this->view('admins/ajoutArticle', $data); }
                
            }

            public function ajoutProduit(){
                $produit = [
                    'origine_produit'=> '',
                    'categorie_produit'=> '',
                    'genre_produit'=> '',
                    'nom_produit'=> '',
                    'image_produit'=> '',
                    'prix_produit'=> ''
                    ];
        
                if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajoutProd'])){
        
                    // Sanitize POST data
                    $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        
                    $produit = [
                        'origine_produit'=> $_POST['origine_produit'],
                        'categorie_produit'=> $_POST['categorie_produit'],
                        'genre_produit'=> $_POST['genre_produit'],
                        'nom_produit'=> $_POST['nom_produit'],
                        'image_produit'=> $_POST['image_produit'],
                        'prix_produit'=> $_POST['prix_produit']
                        
                        ];
        
                        //modifie utilisateur
                        if ($this->adminModel->ajoutProduit($produit)) {
                            //Redirect page connexion
                            header('location: ' . WWW_ROOT . 'admins/crudArticles');
                        } else {
                            die('Erreur système.');
                        }
                    }else{$this->view('admins/ajoutProduit'); }
                    
                }

                public function formProduit($id_produit){
                    if (!empty($_SESSION['id_user']) && $_SESSION['is_admin']==1){
                    $produit = $this->adminModel->viewProduit($id_produit);
                    $data = [
                        'produit' => $produit];
            
                    $this->view('admins/formProduit', $data);
                    } else {
                            header('location:' . WWW_ROOT . 'pages/index');
                        }
                    }
            
                public function updateProduit(){
                    $produit = [
                        'id_produit'=> '',
                        'origine_produit'=> '',
                        'categorie_produit'=> '',
                        'genre_produit'=> '',
                        'nom_produit'=> '',
                        'image_produit'=> '',
                        'prix_produit'=> ''
                        ];
            
                    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['updateProd'])){
            
                        // Sanitize POST data
                        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
                      
                    $produit = [
                        'id_produit'=> $_POST['id_produit'],
                        'origine_produit'=> $_POST['origine_produit'],
                        'categorie_produit'=> $_POST['categorie_produit'],
                        'genre_produit'=> $_POST['genre_produit'],
                        'nom_produit'=> $_POST['nom_produit'],
                        'image_produit'=> $_POST['image_produit'],
                        'prix_produit'=> $_POST['prix_produit']
                        
                        ];
            
                            //modifie utilisateur
                            if ($this->adminModel->updateProduit($produit)) {
                                //Redirect page connexion
                                header('location: ' . WWW_ROOT . 'admins/crudProduits');
                            } else {
                                die('Erreur système.');
                            }
                        }else{$this->view('pages/home'); }
                        
                    }
        
    }
