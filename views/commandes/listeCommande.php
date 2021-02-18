<?php

var_dump($data);

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
                
                <div><a href="">
                    <h6 class="mb-5">Poursuivre vos achats</h6></a>
                </div>
            </div>
            <div class="container backy pt-3">
                <h3>Récapitulatif</h3>
                <div class="row m-5">
                    <div class="col-md-4 w-100">
                        <p>Nombre articles</p>
                    </div> 
                    <div class="col-md-4 w-100">
                        <h4>Total</h4>
                    </div>
                    <div class="col-md-4 w-100">
                        <button type="button" class="btn btn-primary">Commander</button><br><br>
                    </div>
                </div>
            </div>

            
                          
                    <?php foreach($data['commandes'] as $commandes){
                        echo '
                    <div class="container backy">  
                        <div class="row">
                            <div class="col-md-2 w-100">
                                <img class="img-fluid w-25 mt-1" src="'.WWW_ROOT.'public/images/hats_big/'.$commandes->image_produit.'" alt="commande">   
                            </div>
                            <div class="col-md-3  w-100>                                
                                <h4 mt-2>'.$commandes->categorie_produit.' '.$commandes->nom_produit.'</h4><br>
                                <h4 mt-2>'.$commandes->nom_taille.' '.$commandes->nom_couleur.'</h4>
                            </div>

                            <div class="col-md-2  w-100">
                                <h4 class="gold mt-5">'.$commandes->prix_produit.' €</h4>                                                       
                            </div>

                            <div class="col-md-2  w-100>
                                <div class="form-group  ml-3">
                                <label for="quantite">Quantité</label>
                                <input type="number" class="form-control" id="quantite" name="quantite" value="1">
                                </div>                                               
                            
                            </div>

                            <div class="col-md-2  w-100">
                                <h4 class="gold mt-5">'.$commandes->prix_produit.' €</h4>                                                       
                            </div>


                            <div class=" col-md-1  w-100 modal>                                
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>

                        </div>
                    </div>';                        
                    }
                   ?>
            
        </div>

        <?php
        require ROOT . '/views/includes/footer.php';
        ?>