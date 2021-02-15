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
        $this->db->query('SELECT id_article, origine_produit, categorie_produit, genre_produit, nom_produit, nom_taille, nom_couleur, image_produit, date_registre, prix_produit, quantite, remise  FROM article JOIN produit ON article.id_produit = produit.id_produit JOIN taille ON article.id_taille = taille.id_taille JOIN couleur ON article.id_couleur = couleur.id_couleur  WHERE id_produit = :id_produit');

        //Bind 
        $this->db->bind(':id_produit', $id_produit);
        //méthode row comme objet de database
        $articles = $this->db->single();
        return $articles;
    }
}