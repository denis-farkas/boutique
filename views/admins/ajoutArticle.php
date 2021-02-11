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
            <div class="row banner banner_image2 pt-3">                               
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
                    
                    <div class="col-md-12">
                        <h5>Ajout Article</h5>
                        <form action="<?php echo WWW_ROOT;?>admins/ajoutArticle" method="post">
                            <fieldset>
                           
                            <div class="form-group">
                                <label for="origine">Origine</label>
                                <select class="form-control" id="origine" name="origine">
                                    <option>Montecristi</option>
                                    <option>Cuenca</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="genre">Genre</label>
                                <select class="form-control" id="genre" name="genre">
                                    <option>Masculin</option>
                                    <option>Feminin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="qualite">Qualité</label>
                                <select class="form-control" id="qualite" name="qualite">
                                    <option>Fin</option>
                                    <option>Superfin</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="taille">Taille</label>
                                <select class="form-control" id="taille" name="id_taille">
                                    <option value="1">S</option>
                                    <option value="2">M</option>
                                    <option value="3">L</option>
                                    <option value="4">XL</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="couleur">Couleur</label>
                                <select class="form-control" id="couleur" name="id_couleur">
                                    <option value="1">Naturel</option>
                                    <option value="2">Blanc</option>
                                    <option value="3">Beige</option>
                                    <option value="4">Moutarde</option>
                                    <option value="5">Olive</option>
                                    <option value="6">Rouge</option>
                                    <option value="7">Noir</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="text" class="form-control" id="image" name="image" >
                            </div>
                            
                            <div class="form-group">
                                <label for="prix">Prix</label>
                                <input type="number" class="form-control" id="prix" name="prix">
                            </div>

                            <div class="form-group">
                                <label for="quantite">Quantité</label>
                                <input type="number" class="form-control" id="quantite" name="quantite">
                            </div>

                            <input type="hidden" class="form-control" name="date_registre" value="<?= date('Y-m-d');?>"> 
                            
                            <input type="submit" class="btn btn-primary" name="ajout" value="Ajouter">
                            </fieldset>
                            </form>
                        
                    </div> 
                </div>  
              
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
