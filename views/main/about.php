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
                    <form class="form-inline ml-5 my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
                        <button type="submit" class="btn btn-secondary ml-1S"><i class="fas fa-search"></i></button>
                    </form>
                </nav>
            </div>
        </div>
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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="jumbotron">
                                <h1 class="audrey display-5 mb-5">A NOTRE PROPOS</h1><br>
                                <hr class="my-4 gold"><br>
                                <p>Notre entreprise, fondée en 1993, se fixe pour objectif la diffusion et commercialisation dans le monde entier, de nombreux modèles de chapeaux Panama en provenance d'Équateur.
                                Indifféremment des fluctuations annuelles dans la qualité de la production, nous offrons le plus beau et le plus régulier travail artisanal pour les chapeaux panamas.</p>
                                
                                <p>Le Panama est originellement une des composantes traditionnelles de la tenue vestimentaire de nombreuses communautés indigènes vivant dans la province d’Azuay et de Manabi, au sud de l’Equateur.
                                La fabrication de ce chapeau avec les feuilles du carludovica palmata (arbre de la famille des cyclanthacées), appelées pailles de toquilla, repose donc en grande partie, aujourd’hui encore,
                                 sur un savoir-faire manuel, traditionnel et essentiellement féminin.
                                </p>
                                <p>La qualité d'un panama hat peut beaucoup varier entre les Cuenca et les Montecristi.Cette qualité est jugée par la finesse de la palme et la densité du tissage.
                                Une série de cercles au sommet de la coupole, appelés carreras, sont créés à chaque fois que l'artisan ajoute un brin de palme dans l'ouvrage. 
                                Plus grand est le nombre de cercles plus fin est le chapeau.
                                Un simple Cuenca prend trois jours pour être tissé tandis que le plus fin des Montecristis peut prendre jusqu'à six mois.
                                Par convenance, notre catalogue s'articule autour de cette division et montre en taille réelle une image du tissage pour chaque modéle.</p>
                                
                                <h5><a class="nav-link" href="<?= WWW_ROOT ?>pages/index">Bons Achats, sur www.panamaHats.com</a></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid w-100 mt-2" src="<?php echo WWW_ROOT; ?>public/images/tissage2.jpg" alt="tissage">
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>