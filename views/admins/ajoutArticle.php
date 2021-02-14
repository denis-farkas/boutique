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
                        <h5>Ajout Article</h5>
                        <form action="<?php echo WWW_ROOT;?>admins/ajoutArticle" method="post">
                            <fieldset>
                           
                            <div class="form-group">  
                                <?php 
                                echo ' <label for="produit">Produit</label>
                                <select class="form-control" id="produit" name="id_produit">';
                                foreach($data['produits'] as $produit){
                                    echo '<option value="'.$produit->id_produit.'">'.$produit->origine_produit.' '.$produit->nom_produit.'</option>'; 
                                }
                                echo '</select>';
                                ?>     
                                
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
                                    <option value="8">Cafe</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="remise">Remise</label>
                                <input type="number" class="form-control" id="remise" name="remise">
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
                    <div class="col-lg-4"></div>
                    </div>
                </div>  
              
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
