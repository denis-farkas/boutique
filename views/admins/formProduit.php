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
            <div class="row banner banner_image1 pt-3">                               
                <img class="ml-5 img-fluid mt-5" src="<?php echo WWW_ROOT; ?>public/images/logo.png" alt="Logo">                 
                <h2 class="mt-5 pt-5 champain">PANAMA HATS<br /><small>Chapeaux de Légende</small></h2>                              
            </div>
        </div>                                    
        
       
        <div class="row">
            <section class="col-sm-12 col-md-3 my-5 text-center">
                
                    <aside class="col-md-12">
                        <?php
                        require (ROOT.'views/includes/asideCrud.php');
                        ?>  
                    </aside>         
                
            </section>
            <section class="col-sm-12 col-md-9 my-5">
                <div class="container">
                    <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-md-6">
                        <h5>Modifier Produit</h5>
                        <form action="<?php echo WWW_ROOT;?>admins/updateProduit" method="post">
                            <fieldset>
                           
                            <div class="form-group">
                                <label for="origine">Origine</label>
                                <input type="text" class="form-control" id="origine" name="origine_produit" value="<?= $data['produit']->origine_produit ?>" >
                              
                            </div>
                            <div class="form-group">
                                <label for="categorie">Catégorie</label>
                                <input type="text" class="form-control" id="categorie" name="categorie_produit" value="<?= $data['produit']->categorie_produit ?>" >
                              
                            </div>
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" class="form-control" id="genre" name="genre_produit" value="<?= $data['produit']->genre_produit ?>" >
                            </div>

                            <div class="form-group">
                                <label for="qualite">Qualité</label>
                                <input type="text" class="form-control" id="qualite" name="nom_produit" value="<?= $data['produit']->nom_produit ?>" >
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" class="form-control" id="image" name="image_produit" value="<?= $data['produit']->image_produit ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <input type="number" class="form-control" id="prix" name="prix_produit" value="<?= $data['produit']->prix_produit ?>" >
                            </div>

                            <input type="hidden" name="id_produit" value="<?= $data['produit']->id_produit ?>">
                            <input type="submit" class="btn btn-primary" name="updateProd" value="Modifier">
                            </fieldset>
                            </form>
                        
                    </div> 
                    <div class="col-lg-4"></div>
                    </div>
                </div>  
              
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
