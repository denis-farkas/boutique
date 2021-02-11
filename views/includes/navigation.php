<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
 
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

    <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ml-5 active">
                <a class="nav-link" href=" <?= WWW_ROOT ?>pages/index">MA BOUTIQUE
                <span class="sr-only">(current)</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Contacts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Plan</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">A notre sujet</a>
            </li>
        
        </ul>
        <ul class="navbar-nav my-2 my-lg-0">
            
            
            <?php 
                    if(isset($_SESSION['id_user']) && ($_SESSION['is_admin']== 0)) //message de connexion dans la navbar et bouton de déconnexion
                    {
                        echo '<li class="nav-item"><span class="nav-link">'.$_SESSION['prenom'].', vous êtes connecté(e).</span></li>';  
                        echo '<li class="nav-item">';
                        echo '<a href="'. WWW_ROOT.'users/profil" class="nav-link">Modifier</a>';
                        echo '</li>';
                        echo '<li class="nav-item">';
                        echo '<a href="'.WWW_ROOT.'users/logout" class="nav-link">Déconnexion</a></li>
                        <li class="nav-item mr-5">
                        <a class="nav-link" href="#">Panier</a>
                        </li>';
                    }elseif(isset($_SESSION['id_user']) && ($_SESSION['is_admin']== 1))
                    {
                        echo '<li class="nav-item"><span class="nav-link">'.$_SESSION['prenom'].', vous êtes connecté(e) comme Administrateur.</span></li>';  
                        echo '<li class="nav-item">';
                        echo '<a href="'.WWW_ROOT.'admins/index" class="nav-link">Gestion</a></li>';
                        echo '<li class="nav-item">';
                        echo '<a href="'.WWW_ROOT.'users/logout" class="nav-link">Déconnexion</a></li>';
                       

                    }else{
                        echo '<li class="nav-item mr-3">
                        <a class="nav-link" href="'. WWW_ROOT.'users/inscription">Inscription</a></li>';
                        echo '<li class="nav-item">
                        <a class="nav-link" href="'. WWW_ROOT.'users/connexion">Connexion</a></li>';
                    }
            ?>    
            
        </ul> 
    </div>
</nav>
