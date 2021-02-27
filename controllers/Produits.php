<?php

class Produits extends Controller {
    public function __construct() {
        $this->produitModel = $this->model('Produit');
    }

    //fonction qui crée une vue catégorie produit Montécristi
    public function montecristi()
    {
        $categorie='Montecristi';
        $produits= $this->produitModel->listProduit($categorie);
        $data = [
            'title' => 'Montecristi',
            'produits' => $produits
        ];

        $this->view('produits/montecristi', $data);
    }

    //fonction qui crée une vue catégorie produit Fedora
    public function fedora()
    {
        $categorie='Fedora';
        $produits= $this->produitModel->listProduit($categorie);
        $data = [
            'title' => 'Fedora',
            'produits' => $produits
        ];

        $this->view('produits/fedora', $data);
    }
   
    //fonction qui crée une vue catégorie produit Mode
    public function mode()
    {
        $categorie='Mode';
        $produits= $this->produitModel->listProduit($categorie);
        $data = [
            'title' => 'Mode',
            'produits' => $produits
        ];

        $this->view('produits/mode', $data);
    }

    //Fonction qui crée la vue d'un article
      public function ficheArticle($id_produit){

            if(isset($_SESSION['id_user'])){
                $produit= $this->produitModel->viewProduit($id_produit);
                $articles = $this->produitModel->listArticles($id_produit);
                $detail= $this->produitModel->viewDetail($id_produit);
                $data = [
                    'produit' => $produit,
                    'articles' => $articles,
                    'detail' =>$detail
                ];
        
                $this->view('produits/ficheArticle', $data);
            }else{
            header('location: ' . WWW_ROOT . 'users/connexion'); 
            }

        }

        public function fichePromotion($id_produit, $id_article){
            
            if(isset($_SESSION['id_user'])){
                $produit= $this->produitModel->viewProduit($id_produit);
                $article = $this->produitModel->viewPromotion($id_article);
                $detail= $this->produitModel->viewDetail($id_produit);
                $data = [
                    'produit' => $produit,
                    'article' => $article,
                    'detail' =>$detail
                ];
        
                $this->view('produits/fichePromotion', $data);
           
            }else{
                header('location: ' . WWW_ROOT . 'users/connexion');  
            }

        }
}