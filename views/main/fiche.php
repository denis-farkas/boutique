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
                        <h3><a class="nav-link" href="#">MONTECRISTI</a></h3>
                    </li>
                    <li class="nav-item">
                        <h3><a class="nav-link" href="#">FEDORA</a></h3>
                    </li>
                    <li class="nav-item">
                        <h3><a class="nav-link" href="#">MODE</a></h3>
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
        
        
            <div class="jumbotron">
                
                <p>mettre boucle foreach $articles</p>
                    <h1 class="display-5 mb-5">categorie + nom produit</h1>
                    
                        <div class="row back">
                            <div class="col-md-6 w-100">
                                <img class="img-fluid w-100 mt-1" <!-- src="'.WWW_ROOT.'public/images/hats_big/'.$montecristi-image_produit.'" alt="montecristi" -->   
                            </div>
                            <div class="col-md-6 mt-3 w-100">
                                <p class="lead mt-5">Exclusivité Web!</p>
                                <h4 mt-5>'.$montecristi->origine_produit.' '.$montecristi->nom_produit.'</h4><br>
                                <span class="badge badge-pill badge-success">Disponible</span>
                            </div>
                           
                        </div>';
                    }
                    ?>
                </div>
                
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
