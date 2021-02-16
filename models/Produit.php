<?php
class Produit {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function listProduit($categorie){
        $this->db->query('SELECT * FROM produit WHERE categorie_produit= :categorie');
        $this->db->bind(':categorie', $categorie);
        $produits=$this->db->resultSet();
        return $produits;
    }

     public function listArticles($id_produit) {
        $this->db->query('SELECT id_article, nom_taille, nom_couleur, quantite, remise  FROM article JOIN taille ON article.id_taille = taille.id_taille JOIN couleur ON article.id_couleur = couleur.id_couleur  WHERE article.id_produit = :id_produit');

        //Bind 
        $this->db->bind(':id_produit', $id_produit);
        //méthode row comme objet de database
        $articles = $this->db->resultSet();
        return $articles;
    }

    public function viewProduit($id_produit) {
        $this->db->query('SELECT * FROM produit WHERE id_produit= :id_produit');
        $this->db->bind(':id_produit', $id_produit);
        $produit=$this->db->single();
        return $produit; 
    }
}