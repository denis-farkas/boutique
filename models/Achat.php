<?php

class Achat {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function listLivraisons() {
        $this->db->query('SELECT * FROM livraison ');
       
        $livraisons = $this->db->resultSet();
        return $livraisons;
    }

    public function livraisonFacture($id_livraison){
        $this->db->query('SELECT * FROM livraison WHERE id_livraison= :id_livraison');
        $this->db->bind(':id_livraison', $id_livraison);
        $livraison = $this->db->single();
        return $livraison;
    }

    public function listPaiements() {
        $this->db->query('SELECT * FROM paiement ');
       
        $paiements = $this->db->resultSet();
        return $paiements;
    }

    public function paiementFacture($id_paiement){
        $this->db->query('SELECT * FROM paiement WHERE id_paiement= :id_paiement');
        $this->db->bind(':id_paiement', $id_paiement);
        $paiement = $this->db->single();
        return $paiement;
    }


}