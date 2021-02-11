<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }


    public function connexion() {
        $data = [
            'title' => 'page de connexion',
            'emailError' => ''
        ];

        function valid_data($data){
            $data = trim($data);/*enlève les espaces en début et fin de chaîne*/
            $data = stripslashes($data);/*enlève les slashs dans les textes*/
            $data = htmlspecialchars($data);/*enlève les balises html comme ""<>...*/
            return $data;
        }

        //validation des post
        if(isset($_POST['submit'])) {
            
                /*on récupère la valeur email du formulaire et on y applique
                 les filtres de la fonction valid_data*/
                $email = valid_data($_POST["email"]);
                $password = $_POST["password"];

                $loggedInUser = $this->userModel->connexion($email, $password);
               
                if ($loggedInUser == false ) {
                    $data['emailError'] = 'Le mot de passe ou l\'email sont incorrects.';
                    $this->view('users/connexion', $data);              
                }else{
                    $this->createUserSession($loggedInUser);
                } 

        } else {
            $data = ['emailError' => ''];
        $this->view('users/connexion', $data);
        }
    }


    public function inscription() {
        $data = [
            'prenom' => '',
            'nom' =>'',
            'civilite' =>'',
            'telephone' =>'',
            'email'=> '',
            'emailError'=> '',
            'password' => '',
            'confirmPassword' => '',
            'confirmPasswordError' => '',
            'is_admin'=> '',
            'date_registre'=>''          
            ];


        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscrire'])){

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'prenom' => trim($_POST['prenom']),
                'nom' => trim($_POST['nom']),
                'civilite' => trim($_POST['civilite']),
                'telephone' => trim($_POST['telephone']),
                'email'=> trim($_POST["email"]),
                'emailError'=>'',
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'confirmPasswordError' => '',
                'is_admin' =>'0',
                'date_registre'=> date('Y-m-d')
               
            ];


                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Les passwords ne correspondent pas.';
                }elseif
                    ($this->userModel->findUserByEmail($data['email'])) {
                        $data['emailError'] = 'Cet email est déja utilisé.';
                }


            // error vide
            if (empty($data['confirmPasswordError']) && empty($data['emailError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //enregistre utilisateur
                if ($this->userModel->inscription($data)) {
                    //Redirect page connexion
                    header('location: ' . WWW_ROOT . 'users/connexion');
                } else {
                    die('Erreur systéme.');
                }
            }
        }

        $this->view('users/inscription', $data);
    }

    public function profil() {
    

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['modifier'])){

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id_user' => $_SESSION['id_user'],
                'prenom' => trim($_POST['prenom']),
                'nom' => trim($_POST['nom']),
                'civilite' => trim($_POST['civilite']),
                'telephone' => trim($_POST['telephone']),
                'email'=> $_POST['email'],
                'emailError'=>'',
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'confirmPasswordError' => '',
                'date_registre' => $_POST['date_registre']  

            ];



            if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Les passwords ne correspondent pas.';
            }elseif
                ($_SESSION['email']!= $data['email'] && $this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Cet email est déja utilisé.';
            }
            // error vide
            if (empty($data['confirmPasswordError']) && empty($data['emailError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //enregistre utilisateur
                if ($this->userModel->profil($data)) {
                    //Redirect page connexion
                    header('location: ' . WWW_ROOT . 'users/logout');
                } else {
                    die('Erreur système.');
                }
            }else{
                $this->view('users/profil', $data);
            }  
        
        }else{
            
            $id = $_SESSION['id_user'];
            $user = $this->userModel->view($id);
            $data = [
            'user' => $user,
            'id_user'=> '',
            'prenom' => '',
            'nom' =>'',
            'civilite' =>'',
            'telephone' =>'',
            'email'=> '',
            'emailError'=> '',
            'password' => '',
            'confirmPassword' => '',
            'confirmPasswordError' => '',
            'date_registre' => '' 
            ] ;
            $this->view('users/profil', $data);
        }
    }


    public function createUserSession($user) {
      
        $_SESSION['id_user'] = $user->id_user;
        $_SESSION['prenom'] = $user->prenom;
        $_SESSION['email'] = $user->email;

         if ($user->is_admin == 1){
           $_SESSION['is_admin'] = 1;
           header('location:' . WWW_ROOT . 'pages/index');
       }else{
           $_SESSION['is_admin'] = 0;
           header('location:' . WWW_ROOT . 'pages/index');
       }        
        
    }

    public function logout() {
       
        unset($_SESSION['id_user']);
        unset($_SESSION['prenom']);
        unset($_SESSION['email']);
       if ($_SESSION['is_admin'] == 1){
        unset($_SESSION['is_admin']);
       }
        header('location:' . WWW_ROOT . 'users/connexion');
    }

     public function vueProfil($id){
        if (!isset($_SESSION['is_admin']) || empty($_SERVER['HTTP_REFERER']) ){
            header('location:' . WWW_ROOT . 'pages/index');}
        else{
            $user = $this->userModel->view($id);
 
            $data = [
                'user' => $user
            ];
    
            $this->view('admin/vueProfil', $data);  
        }
           
           
     }
         

}