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
                <form action="<?php echo WWW_ROOT;?>achats/choisirAdresse" method="post">
                    <legend>ADRESSE DE LIVRAISON</legend>

                    <table class="table table-hover">
                    <thead>
                        <tr class="table-active">
                            <th scope="col">Identité </th>
                            <th scope="col">Adresse</th>
                            <th scope="col">Choisir</th>                               
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                        if(!empty($data['adresses'])){
                            foreach($data['adresses'] as $adresse){
                                echo '<tr>';
                                echo '<td>'.$adresse->nom_adresse.' '.$adresse->prenom_adresse.'</td>';
                                echo '<td>'.$adresse->num_rue.', '.$adresse->nom_rue.'. '.$adresse->batiment.' '.$adresse->code_postal.' '.$adresse->ville.' - '.$adresse->pays.'</td>';                                                              
                                echo '  <td><div class="form-group">
                                            <div class="custom-control custom-radio">
                                            <input type="radio" id="customRadio'.$adresse->id_adresse.'" name="id_adresse" class="custom-control-input" 
                                             value="'.$adresse->id_adresse.'">
                                            <label class="custom-control-label" for="customRadio'.$adresse->id_adresse.'">Choisir</label>
                                            </div>
                                        </div></td>';
                                echo "</tr>";
                                                            
                            }
                        }                    
                        
                            ?>  
                    </tbody>
                    </table>
                    <input type="submit" class="btn btn-primary" name="choisirAdresse" value="Choisir adresse">
                    </form>

                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <form action="<?php echo WWW_ROOT;?>adresses/ajoutAdresse" method="post">
                            <fieldset>
                            <legend>Ajouter une adresse</legend>

                            <div class="form-group">
                               
                               <label for="lab">Votre domicile</label>
                               <div class="row">
                                   <div class="form-check ml-5" id="lab">
                                       <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="domicile" id="optionsRadios1" value="0" >
                                       Non
                                       </label>
                                   </div>
                                   <div class="form-check ml-5">
                                       <label class="form-check-label">
                                       <input type="radio" class="form-check-input" name="domicile" id="optionsRadios2" value="1" checked="">
                                        Oui
                                       </label>
                                   </div>
                               </div>  
                           </div>

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
                                <label for="ville">Ville</label>
                                <input type="text" class="form-control" id="ville" name="ville">
                            </div>

                            <div class="form-group">
                                <label for="pays">Pays</label>
                                <input type="text" class="form-control" id="pays" name="pays">
                            </div>
                            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>" >
                            <input type="submit" class="btn btn-primary" name="ajoutAdresse" value="Ajouter adresse">
                            </fieldset>
                            </form>
                        </div> 
                                    
                        <div class="col-md-6 text-center mt-5">
                            <img class="img-fluid w-75 mt-5" src="<?php echo WWW_ROOT; ?>public/images/tissage2.jpg" alt="tissage">    
                        </div> 
                    </div>  


               
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
