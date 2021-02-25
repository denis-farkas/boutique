<?php

class Adresse {
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

    public function modifierAdresse($id_adresse) {
       
        $this->db->query('UPDATE adresse SET nom_adresse= :nom_adresse, prenom_adresse= :prenom_adresse, num_rue= :num_rue, nom_rue= :nom_rue, batiment= :batiment, 
        code_postal= :code_postal, ville= :ville, pays= :pays, id_user= :id_user, domicile= :domicile WHERE id_adresse= :id_adresse');


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
            $this->db->bind(':id_adresse', $id_adresse);     
               
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

    public function adresseFacture($id_adresse){
        $this->db->query('SELECT * FROM adresse WHERE id_adresse= :id_adresse');
        $this->db->bind(':id_adresse', $id_adresse);
        $adresse = $this->db->single();
        return $adresse;
    }

    public function adresseDomicile($id_user){
        $this->db->query('SELECT * FROM adresse WHERE id_user= :id_user AND domicile=1');
        $this->db->bind(':id_user', $id_user);
        $adresseDomicile = $this->db->single();
        return $adresseDomicile;
    }

    public function effacerAdresse($id_adresse){
    
        $this->db->query('DELETE FROM adresse WHERE id_adresse = :id_adresse');
        $this->db->bind('id_adresse', $id_adresse);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }


}