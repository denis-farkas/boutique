<?php
class Page {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function promotion(){
        $this->db->query('SELECT id_article, article.id_produit, categorie_produit, nom_produit, image_produit, prix_produit, remise FROM produit JOIN article ON produit.id_produit = article.id_produit  WHERE remise != 0 LIMIT 3');
        $promotion=$this->db->resultSet();
        return $promotion;
    }

    public function meilleureVente(){
        $this->db->query('SELECT detail_commande.id_article, categorie_produit, nom_produit, image_produit, prix_produit, quantite_article , SUM(quantite_article) AS total FROM produit JOIN article ON produit.id_produit=article.id_produit JOIN detail_commande ON article.id_article = detail_commande.id_article GROUP BY detail_commande.id_article ORDER BY total DESC LIMIT 3');
        $meilleureVente = $this->db->resultSet();
        return $meilleureVente;
    }

}