#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: taille
#------------------------------------------------------------

CREATE TABLE taille(
        id_taille  Int  Auto_increment  NOT NULL ,
        nom_taille Varchar (10) NOT NULL ,
        cm_taille  Varchar (10) NOT NULL
	,CONSTRAINT taille_PK PRIMARY KEY (id_taille)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: couleur
#------------------------------------------------------------

CREATE TABLE couleur(
        id_couleur    Int  Auto_increment  NOT NULL ,
        nom_couleur   Varchar (100) NOT NULL ,
        image_couleur Varchar (100) NOT NULL
	,CONSTRAINT couleur_PK PRIMARY KEY (id_couleur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: article
#------------------------------------------------------------

CREATE TABLE article(
        id_article        Int  Auto_increment  NOT NULL ,
        origine           Varchar (45) NOT NULL ,
        genre             Varchar (45) NOT NULL ,
        qualite           Varchar (45) NOT NULL ,
        id_taille         Int NOT NULL ,
        id_couleur        Int NOT NULL ,
        image             Varchar (250) NOT NULL ,
        date_registre     Date NOT NULL ,
        prix              Float NOT NULL ,
        disponible        Bool NOT NULL ,
        id_taille_mesurer Int NOT NULL ,
        id_couleur_Avoir  Int NOT NULL
	,CONSTRAINT article_PK PRIMARY KEY (id_article)


)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: client
#------------------------------------------------------------

CREATE TABLE client(
        id_client     Int  Auto_increment  NOT NULL ,
        prenom        Varchar (150) NOT NULL ,
        nom           Varchar (150) NOT NULL ,
        civilite      Varchar (50) NOT NULL ,
        telephone     Varchar (50) NOT NULL ,
        email         Varchar (150) NOT NULL ,
        password      Varchar (250) NOT NULL ,
        is_admin      Bool NOT NULL ,
        date_registre Datetime NOT NULL
	,CONSTRAINT client_PK PRIMARY KEY (id_client)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: livraison
#------------------------------------------------------------

CREATE TABLE livraison(
        id_livraison Int  Auto_increment  NOT NULL ,
        nom_livreur  Varchar (250) NOT NULL ,
        prix_livreur Float NOT NULL
	,CONSTRAINT livraison_PK PRIMARY KEY (id_livraison)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: facture
#------------------------------------------------------------

CREATE TABLE facture(
        id_facture           Int  Auto_increment  NOT NULL ,
        id_commande          Int NOT NULL ,
        nb_total_articles    Int NOT NULL ,
        prix_total_articles  Float NOT NULL ,
        id_livraison         Int NOT NULL ,
        prix_total           Float NOT NULL ,
        id_client            Int NOT NULL ,
        date_facture         Datetime NOT NULL ,
        id_livraison_Fournir Int NOT NULL
	,CONSTRAINT facture_PK PRIMARY KEY (id_facture)


)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: commande
#------------------------------------------------------------

CREATE TABLE commande(
        id_commande        Int  Auto_increment  NOT NULL ,
        id_client          Int NOT NULL ,
        date_commande      Datetime NOT NULL ,
        statut_commande    Bool NOT NULL ,
        id_detail_commande Int NOT NULL ,
        id_facture         Int
	,CONSTRAINT commande_PK PRIMARY KEY (id_commande)


)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: detail_commande
#------------------------------------------------------------

CREATE TABLE detail_commande(
        id_detail_commande   Int  Auto_increment  NOT NULL ,
        id_article           Int NOT NULL ,
        quantite_article     Int NOT NULL ,
        id_client            Int NOT NULL ,
        id_article_Concerner Int NOT NULL ,
        id_commande          Int NOT NULL ,
        id_client_Effectuer  Int NOT NULL
	,CONSTRAINT detail_commande_PK PRIMARY KEY (id_detail_commande)


)ENGINE=InnoDB;

