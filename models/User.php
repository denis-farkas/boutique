<?php
class User {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    public function profil($data){
            
            $this->db->query('UPDATE user SET prenom= :prenom, nom= :nom, civilite= :civilite, telephone= :telephone, email= :email, password= :password WHERE id= :id');
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':civilite', $data['civilite']);
        $this->db->bind(':telephone', $data['telephone']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':id_user', $data['id_user']);
                   
            //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }         
    }  
    
    public function inscription($data) {
        $registre= date("Y-m-d");
       
        $this->db->query('INSERT INTO user (prenom, nom, civilite, telephone, email, password, is_admin, date_registre) VALUES(:prenom, :nom, :civilite, :telephone, :email, :password, :is_admin, :date_registre)');


        //Bind values
        $this->db->bind(':prenom', $data['prenom']);
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':civilite', $data['civilite']);
        $this->db->bind(':telephone', $data['telephone']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':is_admin', '0');
        $this->db->bind(':date_registre', $registre);
            
                //Execute function
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }


    public function connexion($email, $password) {
        $this->db->query('SELECT * FROM user WHERE email = :email');

        //Bind 
        $this->db->bind(':email', $email);
       
        //méthode row comme objet de database
        $row = $this->db->single();
        if($row != FALSE){
            $hashedPassword = $row->password;

            if (password_verify($password, $hashedPassword) ) {
                return $row;
            } else {
                return false;
            }
        }else{return false;}
       
    }

   

    //Find user by email. Email is passed in by the Controller.
    public function findUserByEmail($email) {
        //Prepared statement
        $this->db->query('SELECT * FROM user WHERE email = :email');

        //Email param will be binded with the email variable
        $this->db->bind(':email', $email);

        //Check if email is already registered
        if($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

      public function view($id) {
        $this->db->query('SELECT * FROM utilisateurs WHERE id = :id');

        //Bind 
        $this->db->bind(':id', $id);
        //méthode row comme objet de database
        $user = $this->db->single();
        return $user;
    }    

}