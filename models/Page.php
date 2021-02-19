<?php
class Page {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function promotion($id_article){
        $this->db->query('SELECT id_article, categorie_produit, nom_produit, image_produit, prix_produit, remise FROM produit JOIN article ON produit.id_produit = article.id_produit  WHERE remise != 0 LIMIT 3');
        $this->db->bind(':id_article', $article);
        $promotion=$this->db->resultSet();
        return $promotion;
    }

    public function meilleureVente($id_article){
        $this->db->query('SELECT id_article, categorie_produit, nom_produit, image_produit, prix_produit, quantite_article  FROM produit JOIN article ON produit.id_produit=article.id_produit JOIN detail_commande ON article.id_article = detail_commande.id_article ORDER BY quantite_article DESC LIMIT 3');
        $this->db->bind(':id_article', $id_article);
        $meilleureVente = $this->db->resultSet();
        return $meilleureVente;
    }

    public function plusRecent($id_article){
        $this->db->query('SELECT id_article, categorie_produit, nom_produit, image_produit, prix_produit, date_registre  FROM produit JOIN article ON produit.id_produit=article.id_produit ORDER BY date_registre DESC LIMIT 3');
        $this->db->bind(':id_article', $id_article);
        $plusRecent = $this->db->resultSet();
        return $plusRecent;
    }


}