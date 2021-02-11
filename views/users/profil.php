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
                            <form action="<?php echo WWW_ROOT;?>users/profil" method="post">
                            <fieldset>
                            <legend>MODIFIER VOTRE PROFIL</legend>
                            <div class="form-group">
                                <label for="genre">Civilité</label>
                                <select class="form-control" id="genre" name="civilite" value="<?php echo $data['user']->civilite; ?>">
                                    <option>Monsieur</option>
                                    <option>Madame</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $data['user']->nom; ?>">
                            </div>
                            <div class="form-group">
                                <label for="prenom">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $data['user']->prenom; ?>" >
                            </div>

                            <div class="form-group">
                                <label for="telephone">Téléphone</label>
                                <input type="tel" class="form-control" id="telephone" name="telephone" value="<?php echo $data['user']->telephone; ?>" >
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Adresse email </label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo $data['user']->email; ?>">
                                <span class="invalidFeedback">
                                <?php echo $data['emailError']; ?>
                                </span>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirmer Password</label>
                                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                                <span class="invalidFeedback">
                                <?php echo $data['confirmPasswordError']; ?>
                                </span>
                            </div>
                            
                            <input type="submit" class="btn btn-primary" name="modifier" value="Modifier">
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
