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
            <div class="row banner banner_image1  pt-3">                               
                <img class="ml-5 img-fluid mt-5" src="<?php echo WWW_ROOT; ?>public/images/logo2.png" alt="Logo">                 
                <h2 class="mt-5 pt-5 gold">PANAMA HATS<br /><small class="text-muted">Chapeaux de Légende</small></h2>                              
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
                                  
        <div class="jumbotron">
            <div class="container">
                <ol class="breadcrumb ml-5">
                    <li class="breadcrumb-item"><a href="<?= WWW_ROOT ?>pages/index">Boutique</a></li>
                    <li class="breadcrumb-item active">Panier</li>
                </ol>
                <h1 class="display-5">Panier</h1>
                
                <a href="<?= WWW_ROOT ?>pages/index"><h6 class="mb-5"><< Poursuivre vos achats</h6></a>    
            </div>

            <div class="container backy pt-3">
                <h3>Récapitulatif</h3>
                <?php 
                $total=0;
                $nombre=0;
                foreach($data['commandes'] as $commandes){
                   $nombre=$nombre+$commandes->quantite_article;
                   $total=$total+($commandes->quantite_article*($commandes->prix_produit-($commandes->prix_produit*$commandes->remise/100)));
                   $_SESSION['id_commande']=$commandes->id_commande;
                }
                  
                   ?>

                <div class="row m-5">
                    <div class="col-md-4 w-100">
                        <p>Nombre articles: <?= $nombre ?></p>
                    </div> 
                    <div class="col-md-4 w-100">
                        <h4>Total: <?= $total ?> €</h4>
                    </div>
                    <div class="col-md-4 w-100">
                        <a type="button" class="btn btn-primary" href="<?= WWW_ROOT ?>adresses/adresse" >Commander</a><br><br>
                    </div>
                </div>
            </div>

            
                          
                    <?php 
                    
                    foreach($data['commandes'] as $commandes){
                        echo '
                    <div class="container backy">  
                        <div class="row">
                            <div class="col-md-3 w-50 text-center">
                                <img class="img-fluid w-50 m-3" src="'.WWW_ROOT.'public/images/hats_big/'.$commandes->image_produit.'" alt="commande">   
                            </div>
                            <div class="col-md-4 mt-4 w-100">                                
                                <h6 class="mt-2">'.$commandes->categorie_produit.' '.$commandes->nom_produit.'</h6>
                                <h6 class="mt-2">Taille: '.$commandes->nom_taille.',  Couleur: '.$commandes->nom_couleur.'</h6>';

                                $prix=$commandes->prix_produit;
                                $remise=$commandes->remise;
                                $prixrem= $prix-($prix*$remise/100);

                                echo '<h6 class="gold">Prix: '.$prixrem.' €</h6>  
                            </div>

                            <div class="col-md-3 mt-3 w-75">
                                <form method="post" action="'.WWW_ROOT.'commandes/modifierCommande/'.$commandes->id_detail_commande.'" >
                                    <input type="hidden" name="id_article" value="'.$commandes->id_article.'">
                                    <input type="hidden" name="quantite_article" value="'.$commandes->quantite_article.'">
                                    <input type="hidden" name="id_commande" value="'.$commandes->id_commande.'">
                                <div class="form-group">
                                    <label for="quantite">Quantité</label>
                                    <input type="number" class="form-control" id="quantite" name="quantite" value="'.$commandes->quantite_article.'">
                                </div>
                                    <input type="submit" class="btn btn-primary  btn-sm" name="modifier" value="Modifier">
                                </form>                                                                                             
                            </div>
                       
                            <div class="col-md-2  w-100">                                
                            <a href="'.WWW_ROOT.'commandes/deleteDetailCommande/'.$commandes->id_detail_commande.'/'.$commandes->id_commande.'"><span class="close heavy m-3"></span></a>
                            </div>
                                                    
                        </div>
                    </div><br />';                        
                    }
                   ?>
            
        </div>

        <?php
        require ROOT . '/views/includes/footer.php';
        ?>