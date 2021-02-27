<?php
echo'ok';
class Page {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    //module promotion affiche 3 articles avec remise
    public function promotion(){
        $this->db->query('SELECT id_article, article.id_produit, categorie_produit, nom_produit, image_produit, prix_produit, remise FROM produit JOIN article ON produit.id_produit = article.id_produit  WHERE remise != 0 LIMIT 3');
        $promotion=$this->db->resultSet();
        return $promotion;
    }

    // module meilleurevente affiche 3 articles les plus vendus
    public function meilleureVente(){
        $this->db->query('SELECT detail_commande.id_article, produit.id_produit, categorie_produit, nom_produit, image_produit, prix_produit, quantite_article , SUM(quantite_article) AS total FROM produit JOIN article ON produit.id_produit=article.id_produit JOIN detail_commande ON article.id_article = detail_commande.id_article JOIN commande ON detail_commande.id_commande=commande.id_commande WHERE commande.statut_commande=1 GROUP BY detail_commande.id_article ORDER BY total DESC LIMIT 3');
        $meilleureVente = $this->db->resultSet();
        return $meilleureVente;
    }

    //module search recherche mots clé
    public function search($mot){
        $this->db->query('SELECT * FROM recherche WHERE mot LIKE CONCAT(:partial, "%")  LIMIT 3');
        $this->db->bind(':partial', $mot);
        $result = $this->db->resultSet();
        return $result;
    }

}