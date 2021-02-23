<?php

class Facture {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function afficheFacture($id_facture) {
        $this->db->query('SELECT nb_total_articles, prix_total_articles, prix_total, date_facture,  FROM facture WHERE id_facture = :id_facture');
        SELECT detail_commande.id_article, detail_commande.id_detail_commande, categorie_produit, nom_produit, image_produit, prix_produit, nom_taille, cm_taille, nom_couleur, image_couleur, detail_commande.id_commande, quantite_article, date_commande, remise  FROM detail_commande JOIN article ON detail_commande.id_article = article.id_article JOIN produit ON article.id_produit=produit.id_produit JOIN taille ON article.id_taille=taille.id_taille JOIN couleur ON article.id_couleur=couleur.id_couleur JOIN commande ON detail_commande.id_commande=commande.id_commande WHERE detail_commande.id_commande= :id_commande');
        //Bind 
        $this->db->bind(':id_facture', $id_facture);
        //méthode row comme objet de database
        $facture = $this->db->single();
        return $facture;
    }

    public function listFactures($id_user){
        $this->db->query('SELECT id_facture, nb_total_articles, prix_total_articles, prix_total, date_facture, nom_adresse, prenom_adresse FROM facture  JOIN adresse ON facture.id_adresse=adresse.id_adresse WHERE facture.id_user = :id_user');
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

