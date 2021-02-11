<?php

class Admin {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function crudUsers(){
        $this->db->query('SELECT * FROM user ORDER BY nom ASC');
        $users=$this->db->resultSet();
        return $users;
    }

    public function view($id) {
        $this->db->query('SELECT * FROM user WHERE id_user = :id_user');

        //Bind 
        $this->db->bind(':id_user', $id);
        //méthode row comme objet de database
        $user = $this->db->single();
        return $user;
    }

    public function crudArticles(){
        $this->db->query('SELECT * FROM article ORDER BY date_registre DESC');
        $articles=$this->db->resultSet();
        return $articles;
    }


    public function viewArticle($id_article) {
        $this->db->query('SELECT * FROM article WHERE id_article = :id_article');

        //Bind 
        $this->db->bind(':id_article', $id_article);
        //méthode row comme objet de database
        $article = $this->db->single();
        return $article;
    }
    
    public function updateArticle($article){
            
            $this->db->query('UPDATE article SET origine= :origine, genre= :genre, qualite= :qualite, id_taille= :id_taille, id_couleur= :id_couleur, image= :image, date_registre= :date_registre, prix= :prix, quantite= :quantite WHERE id_article= :id_article');
            $this->db->bind(':origine', $article['origine']);
            $this->db->bind(':genre', $article['genre']);
            $this->db->bind(':qualite', $article['qualite']);
            $this->db->bind(':id_taille', $article['id_taille']);
            $this->db->bind(':id_couleur', $article['id_couleur']);
            $this->db->bind(':image', $article['image']);
            $this->db->bind(':date_registre', $article['date_registre']);
            $this->db->bind(':prix', $article['prix']);
            $this->db->bind(':quantite', $article['quantite']);
            $this->db->bind(':id_article', $article['id_article']);            
           
            //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }         
    }  
    
    public function ajoutArticle($article) {
        $creation= date("Y-m-d");
       
        $this->db->query('INSERT INTO article (origine, genre, qualite, id_taille, id_couleur, image, date_registre, prix, quantite) 
        VALUES(:origine, :genre, :qualite, :id_taille, :id_couleur, :image, :date_registre, :prix, :quantite)');


        //Bind values
            $this->db->bind(':origine', $article['origine']);
            $this->db->bind(':genre', $article['genre']);
            $this->db->bind(':qualite', $article['qualite']);
            $this->db->bind(':id_taille', $article['id_taille']);
            $this->db->bind(':id_couleur', $article['id_couleur']);
            $this->db->bind(':image', $article['image']);
            $this->db->bind(':date_registre', $creation);
            $this->db->bind(':prix', $article['prix']);
            $this->db->bind(':quantite', $article['quantite']);      
               
        //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function connexion($login, $password) {
        $this->db->query('SELECT * FROM utilisateurs WHERE login = :login AND role = :role');

        //Bind 
        $this->db->bind(':login', $login);
        $this->db->bind(':role', 'admin');
        //méthode row comme objet de database
        $row = $this->db->single();
        if($row != FALSE){
            $hashedPassword = $row->password;

            if (password_verify($password, $hashedPassword)) {
                return $row;
            } else {
                return false;
            }
        }else{return false;}
       
    }

    //méthode finduser par login. login est passée par le Controller.
    public function findAdminByLogin($login) {
        $this->db->query('SELECT * FROM utilisateurs WHERE login = :login');

        //Bind 
        $this->db->bind(':login', $login);
        //méthode row comme objet de database
        $row = $this->db->single();
        return $row;
    }

    //Find user by email. Email is passed in by the Controller.
    public function findAdminByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM utilisateurs WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    
    

    public function updateProfil($user){
            
        $this->db->query('UPDATE utilisateurs SET role= :role, blocage= :blocage, periode_blocage= :periode_blocage WHERE id= :id');
        $this->db->bind(':role', $user['role']);
        $this->db->bind(':blocage', $user['blocage']);
        $this->db->bind(':periode_blocage', $user['periode_blocage']);
        $this->db->bind(':id', $user['id']);
        
       
        //Execute function
    if ($this->db->execute()) {
        return true;
    } else {
        return false;
    }         
}  

    public function blocked(){
        $this->db->query('SELECT * FROM utilisateurs WHERE blocage=1 ORDER BY login ASC');
        $blocked=$this->db->resultSet();
        return $blocked;
        }
    }
        
    