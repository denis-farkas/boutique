<?php
class Admins extends Controller {
    public function __construct() {
        $this->adminModel = $this->model('Admin');
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
            'origine'=> '',
            'genre'=> '',
            'qualite'=> '',
            'id_taille'=> '',
            'id_couleur'=> '',
            'image'=> '',
            'date_registre'=> '',
            'prix'=> '',
            'quantite'=> ''
            ];

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $article = [
                'id_article'=> $_POST['id_article'],
                'origine'=> $_POST['origine'],
                'genre'=> $_POST['genre'],
                'qualite'=> $_POST['qualite'],
                'id_taille'=> $_POST['id_taille'],
                'id_couleur'=> $_POST['id_couleur'],
                'image'=> $_POST['image'],
                'date_registre'=> date(Y-m-d),
                'prix'=> $_POST['prix'],
                'quantite'=> $_POST['quantite']
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
            $article = [
                'id_article'=> '',
                'origine'=> '',
                'genre'=> '',
                'qualite'=> '',
                'id_taille'=> '',
                'id_couleur'=> '',
                'image'=> '',
                'date_registre'=> '',
                'prix'=> '',
                'quantite'=> ''
                ];
    
            if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['ajout'])){
    
                // Sanitize POST data
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
                $article = [
                    'id_article'=> $_POST['id_article'],
                    'origine'=> $_POST['origine'],
                    'genre'=> $_POST['genre'],
                    'qualite'=> $_POST['qualite'],
                    'id_taille'=> $_POST['id_taille'],
                    'id_couleur'=> $_POST['id_couleur'],
                    'image'=> $_POST['image'],
                    'date_registre'=> date(Y-m-d),
                    'prix'=> $_POST['prix'],
                    'quantite'=> $_POST['quantite']
                    ];
    
                    //modifie utilisateur
                    if ($this->adminModel->ajoutArticle($article)) {
                        //Redirect page connexion
                        header('location: ' . WWW_ROOT . 'admins/crudArticles');
                    } else {
                        die('Erreur système.');
                    }
                }else{$this->view('admins/ajoutArticle'); }
                
            }
        
    }
