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
        $creation= date("Y-m-d H:i:s");
       
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

    public function listeCommandeAttente($id_user){
        $this->db->query('SELECT commande.id_commande, date_commande, statut_commande, detail_commande.id_article, detail_commande.id_detail_commande, categorie_produit, nom_produit, image_produit, prix_produit, nom_taille, cm_taille, nom_couleur, image_couleur, quantite_article, remise  FROM commande JOIN detail_commande ON commande.id_commande=detail_commande.id_commande JOIN article ON detail_commande.id_article = article.id_article JOIN produit ON article.id_produit=produit.id_produit JOIN taille ON article.id_taille=taille.id_taille JOIN couleur ON article.id_couleur=couleur.id_couleur  WHERE commande.id_user= :id_user AND statut_commande=0');
        $this->db->bind(':id_user', $id_user);
        $commandes = $this->db->resultSet();
        return $commandes;
    }

    public function listeCommande($id_commande){
        $this->db->query('SELECT detail_commande.id_article, detail_commande.id_detail_commande, categorie_produit, nom_produit, image_produit, prix_produit, nom_taille, cm_taille, nom_couleur, image_couleur, detail_commande.id_commande, quantite_article, date_commande, remise  FROM detail_commande JOIN article ON detail_commande.id_article = article.id_article JOIN produit ON article.id_produit=produit.id_produit JOIN taille ON article.id_taille=taille.id_taille JOIN couleur ON article.id_couleur=couleur.id_couleur JOIN commande ON detail_commande.id_commande=commande.id_commande WHERE detail_commande.id_commande= :id_commande');
        $this->db->bind(':id_commande', $id_commande);
        $commandes = $this->db->resultSet();
        return $commandes;
    }

    public function modifierCommande($id_detail_commande, $article){
            
        $this->db->query('UPDATE detail_commande SET quantite_article= :quantite_article WHERE id_detail_commande= :id_detail_commande');
        $this->db->bind(':quantite_article', $article['quantite_article']);
        $this->db->bind(':id_detail_commande', $id_detail_commande);
                
            //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }         
    }
    
    public function deleteCommande($id_detail_commande){
    
        $this->db->query('DELETE FROM detail_commande WHERE id_detail_commande = :id_detail_commande');
        $this->db->bind('id_detail_commande', $id_detail_commande);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }

    }
}
        
 