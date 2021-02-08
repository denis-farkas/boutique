<?php
class Users extends Controller {
    public function __construct() {
        $this->userModel = $this->model('User');
    }

    public function valid_data($data){
        $data = trim($data);/*enlève les espaces en début et fin de chaîne*/
        $data = stripslashes($data);/*enlève les slashs dans les textes*/
        $data = htmlspecialchars($data);/*enlève les balises html comme ""<>...*/
        return $data;
    }

    public function connexion() {
        $data = [
            'title' => 'page de connexion',
            'emailError' => ''
        ];

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


    public function inscription() {
        $data = [
            'login' => '',
            'loginError' =>'',
            'password' => '',
            'confirmPassword' => '',
            'confirmPasswordError' => '',
            'fieldsEmptyError' =>'',
            'email'=> '',
            'emailError'=> '',
            'intranet' =>'',
            'avatar'=> '',
            'naissance'=>'',
            'creation'=> '',
            'genre'=>'',
            'role' => '',
            'blocage'=> '',
            'periode_blocage'=> ''
            ];


        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['inscrire'])){

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);


            $data = [
                'login' => trim($_POST['login']),
                'loginError' =>'',
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'confirmPasswordError' => '',
                'fieldsEmptyError' =>'',
                'email'=> trim($_POST["email"]),
                'emailError'=>'',
                'intranet'=>$_POST['login'].'@intranet',
                'avatar'=> trim($_POST["avatar"]),
                'naissance'=>trim($_POST["naissance"]),
                'creation'=> date('Y-m-d'),
                'genre'=>trim($_POST["genre"]),
                'role' => trim($_POST['role']),
                'blocage'=> trim($_POST['blocage']),
                'periode_blocage'=> trim($_POST['periode_blocage'])
            ];


                if ($data['password'] != $data['confirmPassword']) {
                    $data['confirmPasswordError'] = 'Les passwords ne correspondent pas.';
                }elseif(empty($data['avatar']) || empty($data['naissance']) ||empty($data['genre'])){$data['fielfdsEmptyError']= 'Tous les champs doivent être renseignés';
                }elseif
                    ($this->userModel->findUserByEmail($data['email'])) {
                        $data['emailError'] = 'Cet email est déja utilisé.';
                }elseif
                ($this->userModel->findUserByLogin($data['login'])) {
                    $data['loginError'] = 'Ce login est déja utilisé.';}


            // error vide
            if (empty($data['confirmPasswordError']) && empty($data['loginError']) && empty($data['emailError']) && empty($data['fieldsEmptyError'])) {

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
        $data = [
            'id'=> '',
            'login' => '',
            'password' => '',
            'confirmPassword' => '',
            'confirmPasswordError' => '',
            'fieldsEmptyError' =>'',
            'email'=> '',
            'emailError'=> '',
            'avatar'=> '',
            ];

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['modifier'])){

            // Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => $_SESSION['id'],
                'login' => $_SESSION['login'],
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'confirmPasswordError' => '',
                'fieldsEmptyError' =>'',
                'email'=> trim($_POST["email"]),
                'emailError'=>'',
                'avatar'=> trim($_POST["avatar"]),

            ];



            if ($data['password'] != $data['confirmPassword']) {
                $data['confirmPasswordError'] = 'Les passwords ne correspondent pas.';
            }elseif(empty($data['avatar']) ){$data['fielfdsEmptyError']= 'L\'avatar doit être renseigné';
            }elseif
                ($_POST['email']!= $_SESSION['email'] && $this->userModel->findUserByEmail($data['email'])) {
                    $data['emailError'] = 'Cet email est déja utilisé.';
            }
        // error vide
        if (empty($data['confirmPasswordError']) && empty($data['emailError']) && empty($data['fieldsEmptyError'])) {

                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                //enregistre utilisateur
                if ($this->userModel->profil($data)) {
                    //Redirect page connexion
                    header('location: ' . WWW_ROOT . 'users/logout');
                } else {
                    die('Erreur système.');
                }
            }
        }
        $this->view('users/profil', $data);
    }


    public function createUserSession($user) {
      
        $_SESSION['id'] = $user->id;
        $_SESSION['prenom'] = $user->prenom;

         if ($user->is_admin==1){
           $_SESSION['is_admin']= 1;
           header('location:' . WWW_ROOT . 'pages/admin');
       }else{
           header('location:' . WWW_ROOT . 'pages/index');
       }        
        
    }

    public function logout() {
       
        unset($_SESSION['id']);
        unset($_SESSION['prenom']);
       if ($_SESSION['is_admin']== 1){
        unset($_SESSION['is_admin']);
       }
        header('location:' . WWW_ROOT . 'pages/index');
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