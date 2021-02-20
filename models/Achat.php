<?php

class Achat {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function ajoutAdresse() {
       
        $this->db->query('INSERT INTO adresse (nom_adresse, prenom_adresse, num_rue, nom_rue, batiment, code_postal, ville, pays, id_user, domicile) 
        VALUES(:nom_adresse, :prenom_adresse, :num_rue, :nom_rue, :batiment, :code_postal, :ville, :pays, :id_user, :domicile)');


        //Bind values
            $this->db->bind(':nom_adresse', $_POST['nom_adresse']);
            $this->db->bind(':prenom_adresse', $_POST['prenom_adresse']);
            $this->db->bind(':num_rue', $_POST['num_rue']);
            $this->db->bind(':nom_rue', $_POST['nom_rue']);
            $this->db->bind(':batiment', $_POST['batiment']);
            $this->db->bind(':code_postal', $_POST['code_postal']);
            $this->db->bind(':ville', $_POST['ville']);
            $this->db->bind(':pays', $_POST['pays']);
            $this->db->bind(':id_user', $_POST['id_user']);
            $this->db->bind(':domicile', $_POST['domicile']);      
               
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function adresse($id) {
        $this->db->query('SELECT * FROM adresse WHERE id_user= :id_user');
        $this->db->bind(':id_user', $id);
        $adresses = $this->db->resultSet();
        return $adresses;
    }

    public function listLivraisons() {
        $this->db->query('SELECT * FROM livraison ');
       
        $livraisons = $this->db->resultSet();
        return $livraisons;
    }

    public function listPaiements() {
        $this->db->query('SELECT * FROM paiement ');
       
        $paiements = $this->db->resultSet();
        return $paiements;
    }

}