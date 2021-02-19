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
                      
                           
            </div>
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
            <section class="col-sm-12 col-md-9 my-5">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="<?php echo WWW_ROOT;?>achats/ajoutAdresse" method="post">
                            <fieldset>
                            <legend>ADRESSE</legend>

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom_adresse" >
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom_adresse" >
                            </div>

                            <div class="form-group">
                                <label for="num_rue">Numéro de Rue</label>
                                <input type="text" class="form-control" id="num_rue" name="num_rue" >
                            </div>
                            
                            <div class="form-group">
                                <label for="nom_rue">Nom de la Rue </label>
                                <input type="text" class="form-control" id="nom_rue" name="nom_rue">
                            </div>
                            <div class="form-group">
                                <label for="batiment">Batiment, Etage</label>
                                <input type="text" class="form-control" id="batiment" name="batiment">
                            </div>
                            <div class="form-group">
                                <label for="code_postal">Code Postal</label>
                                <input type="text" class="form-control" id="code_postal" name="code_postal">
                            </div>

                            <div class="form-group">
                                <label for="ville">Code Postal</label>
                                <input type="text" class="form-control" id="code_postal" name="code_postal">
                            </div>

                            <div class="form-group">
                                <label for="pays">Code Postal</label>
                                <input type="text" class="form-control" id="code_postal" name="code_postal">
                            </div>
                            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>" >
                            <input type="submit" class="btn btn-primary" name="inscrire" value="S'inscrire">
                            </fieldset>
                            </form>
                        </div> 
                                      
                        <div class="col-md-6 text-center">
                            <img class="img-fluid w-75 mt-5" src="<?php echo WWW_ROOT; ?>public/images/tissage2.jpg" alt="tissage">    
                        </div> 
                    </div>  


               
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>