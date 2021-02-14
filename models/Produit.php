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
}