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
                <h1 class="display-5 mb-5">ARTICLE </h1>   
                <div class="container backy">                                  
                                
                  
                    <div class="row">
                        <div class="col-md-6 w-100">
                        <img class="img-fluid w-75 m-5" src="<?php echo WWW_ROOT.'public/images/hats_big/'.$data['produit']->image_produit; ?>" alt="">   
                        </div>
                        <div class="col-md-6 mt-3 w-100">
                       
                        <h4 mt-5><?php echo $data['produit']->categorie_produit.' '.$data['produit']->nom_produit; ?></h4>
                        <span class="badge badge-pill badge-success">Disponible</span>
                        <p><?= $data['detail']->description ?></p>
                        <img class="img-thumbnail ml-5 " src="<?php echo WWW_ROOT.'public/images/palme/'.$data['detail']->img_palme; ?>" alt="">
                        <span class="ml-2">Calibre de palme de: <?= $data['detail']->calibre ?> mm.</span>
                        <h4 class="gold mt-5"><?= $data['produit']->prix_produit ?> €</h4>
                        <br />
                        <form action="<?php echo WWW_ROOT;?>produits/viewDetail" method="post">
                            <fieldset>
                            <div class="form-group">
                                <label for="taille">Taille</label>
                                <input type="text" class="form-control" id="taille" name="taille" value="<?= $data['article']->nom_taille ?>" disabled >
                            </div>

                            <div class="form-group">
                                <label for="couleur">Couleur</label>
                                <input type="text" class="form-control" id="couleur" name="couleur" value="<?= $data['article']->nom_couleur ?>" disabled >
                            </div>
                            
                            <div class="form-group">
                                <label for="quantite">Quantité</label>
                                <input type="number" class="form-control" id="quantite" name="quantite" value="<?= $data['article']->quantite ?>" >
                            </div>

                            <input type="hidden" name="id_produit" value="<?= $data['produit']->id_produit ?>">
                            <input type="submit" class="btn btn-primary" name="update" value="Modifier">
                            </fieldset>
                            </form>
                        
                        <p>tailles disponibles:  <?php foreach($data['articles'] as $article){ if($article->quantite >=1){echo $article->nom_taille.' '; } } ?></p> <!--$article->id_article -->
                        <p>couleurs disponibles:  <?php if($data['produit']->nom_produit== 'Buly' || $data['produit']->nom_produit== 'Dos Calidades' ){ foreach($data['articles'] as $article){ if($article->quantite >=1){ echo $article->nom_couleur; } } }else{echo $data['produit']->nom_produit;} ?></p>
                        </div>
                    </div>
                    <div class="row text-center">
                        <div class="col-md-2 w-100"></div>

                        <div class="col-md-8 w-100">
                            <?php
                            require (ROOT.'views/includes/nav_tab.php');
                            ?>
                        </div>
                        
                        <div class="col-md-2 w-100"></div>
                    </div>
                </div>    
               
            </div>                
            
       


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
