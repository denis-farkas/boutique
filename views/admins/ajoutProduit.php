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
                        <h5>Ajout Produit</h5>
                        <form action="<?php echo WWW_ROOT;?>admins/ajoutProduit" method="post">
                            <fieldset>
                           
                            <div class="form-group">
                                <label for="origine">Origine</label>
                                <select class="form-control" id="origine" name="origine_produit">
                                    <option>Montecristi</option>
                                    <option>Cuenca</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="categorie">Catégorie</label>
                                <select class="form-control" id="categorie" name="categorie_produit">
                                    <option>Montecristi</option>
                                    <option>Fedora</option>
                                    <option>Mode</option> 
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <select class="form-control" id="genre" name="genre_produit">
                                    <option>Masculin</option>
                                    <option>Feminin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="qualite">Qualité</label>
                                <input type="text" class="form-control" id="qualite" name="nom_produit" >
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" class="form-control" id="image" name="image_produit" >
                            </div>
                            
                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <input type="number" class="form-control" id="prix" name="prix_produit">
                            </div>

                           
                            <input type="submit" class="btn btn-primary" name="ajoutProd" value="Ajouter">
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
