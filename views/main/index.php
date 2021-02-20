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
        
       <div class="container">
       <?php require (ROOT.'views/includes/categ.php'); ?>
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
                    
                        <h3 class="mb-5">Nos promotions</h3>
                        <div class='row'>
                            <div class="card-deck">
                                
                                <?php foreach($data['promotion'] as $promotion){
                                    echo'
                                <div class="card text-center">
                                    <img src="'. WWW_ROOT.'public/images/hats_big/'.$promotion->image_produit.'" alt="" width="75%">

                                    <div class="card-body">
                                        <h5 class="card-title gold">'.$promotion->categorie_produit.'</h5>
                                        <p class="card-text">'.$promotion->nom_produit.'</p>
                                        <h5 class="gold">'.$promotion->prix_produit.' €</h5>
                                        <p class="text-danger">- '.$promotion->remise.' %</p>
                                        <a href="'.WWW_ROOT.'produits/fichePromotion/'.$promotion->id_article.'/'.$promotion->id_produit.'" class="btn btn-primary btn-sm m-3">Consulter</a><br>
                                        <span class="badge badge-pill badge-success">Disponible</span>
                                    </div>
                                </div>';
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    
                    <div class="jumbotron">
                        <h3 class="mb-5">Nos meilleures ventes</h3>
                        <div class='row'>
                            <div class="card-deck">
                                <?php foreach($data['meilleureVente'] as $meilleureVente){
                                echo'
                                <div class="card" >
                                    <img src="'.WWW_ROOT.'public/images/hats_big/'.$meilleureVente->image_produit.'" alt="" width="75%">

                                    <div class="card-body">
                                        <h5 class="card-title gold">'.$meilleureVente->categorie_produit.'</h5>
                                        <p class="card-text">'.$meilleureVente->nom_produit.'</p>
                                        <h5 class="gold">'.$meilleureVente->prix_produit.' €</h5>
                                        <a href="'.WWW_ROOT.'produits/ficheArticle/'.$meilleureVente->id_produit.'" class="btn btn-primary btn-sm m-3">Consulter</a><br>
                                        <span class="badge badge-pill badge-success">Disponible</span>
                                    </div>
                                </div>';
                                }
                                ?>
                            </div>                                    
                        </div>                
                    </div>
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
