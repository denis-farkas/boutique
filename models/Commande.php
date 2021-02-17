<?php
class Commande {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function viewCommande($id_user) {
        $this->db->query('SELECT * FROM commande WHERE id_user= :id_user AND statut_commande = 0');
        $this->db->bind(':id_user', $id_user);
        $commande=$this->db->single();
        return $commande; 
    }

    public function ajoutCommande($id_user) {
        $creation= date("Y-m-d");
       
        $this->db->query('INSERT INTO commande (date_commande, statut_commande, id_user)
        VALUES(:date_commande, :statut_commande, :id_user)');


        //Bind values
            $this->db->bind(':date_commande', $creation);
            $this->db->bind(':statut_commande', 0);
            $this->db->bind(':id_user', $id_user);
                          
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

        
    }
}