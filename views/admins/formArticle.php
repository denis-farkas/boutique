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
                        <h5>Modifier Article</h5>
                        <form action="<?php echo WWW_ROOT;?>admins/updateArticle" method="post">
                            <fieldset>
                           
                            <div class="form-group">
                                <label for="origine">Origine</label>
                                <input type="text" class="form-control" id="origine" name="origine" value="<?= $data['article']->origine_produit ?>" disabled>
                              
                            </div>
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <input type="text" class="form-control" id="genre" name="genre" value="<?= $data['article']->genre_produit ?>" disabled >
                            </div>

                            <div class="form-group">
                                <label for="qualite">Qualité</label>
                                <input type="text" class="form-control" id="qualite" name="qualite" value="<?= $data['article']->nom_produit ?>" disabled>
                            </div>

                            <div class="form-group">
                                <label for="taille">Taille</label>
                                <input type="text" class="form-control" id="taille" name="taille" value="<?= $data['article']->nom_taille ?>" disabled >
                            </div>

                            <div class="form-group">
                                <label for="couleur">Couleur</label>
                                <input type="text" class="form-control" id="couleur" name="couleur" value="<?= $data['article']->nom_couleur ?>" disabled >
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" class="form-control" id="image" name="image" value="<?= $data['article']->image_produit ?>" disabled >
                            </div>
                            
                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <input type="number" class="form-control" id="prix" name="prix" value="<?= $data['article']->prix_produit ?>" disabled >
                            </div>

                            <div class="form-group">
                                <label for="quantite">Quantité</label>
                                <input type="number" class="form-control" id="quantite" name="quantite" value="<?= $data['article']->quantite ?>" >
                            </div>

                            <div class="form-group">
                                <label for="remise">Remise</label>
                                <input type="number" class="form-control" id="remise" name="remise" value="<?= $data['article']->remise ?>" >
                            </div>

                            <div class="form-group">
                                <label for="date">Date d'enregistrement</label>
                                <input type="text" class="form-control"  id="date" name="date_registre" value="<?= $data['article']->date_registre ?>" disabled>
                            </div>
                            <input type="hidden" name="id_article" value="<?= $data['article']->id_article ?>">
                            <input type="submit" class="btn btn-primary" name="update" value="Modifier">
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
