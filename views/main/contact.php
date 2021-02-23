<?php
   require (ROOT.'views/includes/head.php');
?>
 <body>

    <div class="container-fluid">
        
        <div class="col-md-12">
            <?php
            require (ROOT.'views/includes/navigation.php');
            ?>
        </div>
        
        
        <div class="col-md-12 mt-5">
            <div class="row">                               
                <img class="ml-5 img-fluid" src="<?php echo WWW_ROOT; ?>public/images/logo.png" alt="Logo">                 
                <h2 class="mt-5">PANAMA HATS<br /><small class="text-muted">Chapeaux de Légende</small></h2>                              
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <form class="form-inline ml-5 my-2 my-lg-0" method="post" action="<?php echo WWW_ROOT; ?>pages/contact">
                        <input class="form-control mr-sm-2" type="text" name="nom" placeholder="Rechercher">
                        <button type="submit" name="search"><i class="fas fa-search fa-sm"></i></button>
                    </form>
                </nav>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav ml-5 mx-auto" >

                <?php
                if(isset($data['search']) && (!empty($data['search']))){
                    echo '<li class="nav-item mt-2"> Résultat(s) de votre recherche :</li>';
                    echo '<hr>';
                    foreach($data['search'] as $search){
                        echo '<li class="nav-item"><a class="nav-link" href="'.WWW_ROOT.$search->lien.'">'.$search->mot.'</a></li>';
                    }
                }elseif(isset($data['search']) && (empty($data['search']))){ 
                    echo '<h6>Pas de suggestions pour ce mot.</h6>';
                }
                ?>
                </ul>
            </nav>    
                                     
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav ml-5 mx-auto">                        
                <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/montecristi">MONTECRISTI</a></h3>
                    </li>
                    <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/fedora">FEDORA</a></h3>
                    </li>
                    <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/mode">MODE</a></h3>
                    </li>                
                                
                </ul>
            </nav>
                
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/palme.jpg" alt="Palme">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/fibre.jpg" alt="Toquilla">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/process.jpg" alt="Process">
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-3 my-5 text-center">
                <div class="row">
                    <aside class="col-md-12">
                        <?php
                        require (ROOT.'views/includes/aside.php');
                        ?>  
                    </aside>             
                    
                </div>
            </div>
            <section class="col-sm-12 col-md-9 my-5 text-center">
                <div class="container">
                
               
                <div class="jumbotron">
                <h5>PanamaHats.com</h5>
                    <h3 class="audrey">SERVICE CLIENT</h3>
                    <h1 class="audrey display-5 m-5">CONTACTEZ-NOUS</h1>
                  

           
           <form action="<?php echo WWW_ROOT;?>pages/contact" method="post">
  <fieldset>
    <legend>Envoyer un message</legend>
    <div class="row">
        <div class="col-md-4">

        
    <div class="form-group">
      <label for="objet">Objet</label>
      <select class="form-control" id="objet" name="objet">
        <option>Informations</option>
        <option>Devis</option>
        <option>Commande</option>
        <option>Livraison- Retour</option>
        <option>Commentaire</option>
      </select>
    </div>

    <div class="form-group">
      <label for="email">Votre email</label>
      <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="email">
    </div>

    <div class="form-group">
      <label for="ref">Référence de commande</label>
      <input type="text" class="form-control" id="ref" aria-describedby="ref" placeholder="ref">
    </div>
   
    <div class="form-group">
      <label for="file">Joindre un fichier</label>
      <input type="file" class="form-control-file" id="file" aria-describedby="file">
    </div>
   
   </div>
   <div class="col-md-8">
    <div class="form-group">
      <label for="text">Votre message</label>
      <textarea class="form-control" id="text" rows="8"></textarea>
    </div>
   
    <a type="button" href="<?= WWW_ROOT ?>pages/index" class="btn btn-primary mt-5">Envoyer</a>
  </fieldset>
</form>
                
            
        </div>

        <div class="col-md-12"><a class="float-lg-right m-3" href="#top"><h3>Top</h3></a></div>
        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
