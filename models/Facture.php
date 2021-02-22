<?php

class Facture {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function afficheFacture($id_facture) {
        $this->db->query('SELECT * FROM facture WHERE id_facture = :id_facture');

        //Bind 
        $this->db->bind(':id_facture', $id_facture);
        //méthode row comme objet de database
        $facture = $this->db->single();
        return $facture;
    }

    public function listFactures($id_user){
        $this->db->query('SELECT * FROM facture WHERE id_user = :id_user');
        $this->db->bind(':id_user', $id_user);
        $factures=$this->db->resultSet();
        return $factures;
    }

    public function ajoutFacture($data){

        $creation= date("Y-m-d");
        
        $this->db->query('INSERT INTO facture (id_commande, nb_total_articles, prix_total_articles, id_livraison, prix_total, date_facture, id_user, id_adresse) 
        VALUES( :id_commande, :nb_total_articles, :prix_total_articles, :id_livraison, :prix_total, :date_facture, :id_user, :id_adresse)');


        //Bind values
            
            $this->db->bind(':id_commande', $_SESSION['id_commande']);
            $this->db->bind(':nb_total_articles', $data['quantite']);
            $this->db->bind(':prix_total_articles', $data['remise']);
            $this->db->bind(':id_livraison', $data['livraison']->id_livraison);
            $this->db->bind(':prix_total', $data['total']);
            $this->db->bind(':date_facture', $creation);
            $this->db->bind(':id_user', $_SESSION['id_user']);     
            $this->db->bind(':id_adresse', $data['adresseDomicile']->id_adresse);
            

        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
