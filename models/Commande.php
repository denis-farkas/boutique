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

    public function detailCommande($article){
        $this->db->query('INSERT INTO detail_commande (id_article, quantite_article, id_commande)
        VALUES(:id_article, :quantite_article, :id_commande)');


        //Bind values
            $this->db->bind(':id_article', $article['id_article']);
            $this->db->bind(':quantite_article', $article['quantite_article']);
            $this->db->bind(':id_commande', $article['id_commande']);
                          
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function listeCommande($id_commande){
        $this->db->query('SELECT * FROM detail_commande WHERE id_commande= :id_commande');
        $this->db->bind(':id_commande', $id_commande);
        $commandes = $this->db->resultSet();
        return $commandes;
    }
}
        
 