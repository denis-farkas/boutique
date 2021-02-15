<?php
class Produits extends Controller {
    public function __construct() {
        $this->produitModel = $this->model('Produit');
    }

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

      public function ficheArticle($id_produit){
        if (!empty($_SESSION['id_user'])){
        $article = $this->adminModel->listArticles($id_produit);
        $data = [
            'articles' => $articles];

        $this->view('produits/ficheArticle', $data);
        } else {
                header('location:' . WWW_ROOT . 'pages/index');
            }
        }




}