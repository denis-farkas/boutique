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
                                <?php 
                                echo ' <label for="article">Article</label>
                                <select class="form-control" id="article" name="id_article">';
                                foreach($data['articles'] as $articles){
                                    if($articles->quantite >= 1){
                                        echo '<option value="'.$articles->id_article.'" >';
                                        echo 'Couleur : '.$articles->nom_couleur. ', ';
                                        echo ' Taille : '.$articles->nom_taille.', soit : '.$articles->cm_taille.'</option>';
                                    }
                                }
                                echo '</select>';
                                ?>     
                                
                            </div>
                            <div class="form-group">
                                <p>Couleur(s) disponible(s) : </p>
                                <?php
                                if ($data['produit']->id_produit == 1  || $data['produit']->id_produit == 2){
                                    echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/naturel.jpg" alt="">';
                                }elseif($data['produit']->id_produit == 3  || $data['produit']->id_produit == 4){
                                        echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/blanc.jpg" alt="">'; 
                                }elseif($data['produit']->id_produit == 5  || $data['produit']->id_produit == 6 || $data['produit']->id_produit == 8){
                                    echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/beige.jpg" alt="">'; 
                            }elseif($data['produit']->id_produit == 7){
                                echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/moutarde.jpg" alt="">';
                                echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/noir.jpg" alt="">';
                                echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/cafe.jpg" alt="">';
                            }else{
                                echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/moutarde.jpg" alt="">';
                                echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/noir.jpg" alt="">';
                                echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/cafe.jpg" alt="">';
                                echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/olive.jpg" alt="">';
                                echo '<img class="img-thumbnail ml-5 " src="'.WWW_ROOT.'public/images/couleur/rouge.jpg" alt="">';
                               
                            }
                                ?>
                            </div>
                            
                            <div class="form-group">
                                <label for="quantite">Quantité</label>
                                <input type="number" class="form-control" id="quantite" name="quantite" value="1">
                            </div>

                            <input type="hidden" name="id_produit" value="<?= $data['produit']->id_produit ?>">
                            <input type="submit" class="btn btn-primary" name="update" value="Modifier">
                            </fieldset>
                            </form>
                        
                       
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
