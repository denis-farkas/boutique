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
                            <form action="<?php echo WWW_ROOT;?>achats/livraison" method="post">
                            <fieldset>
                            <legend>MOYEN DE LIVRAISON</legend>

                            <table class="table table-hover">
                            <thead>
                            <tr class="table-active">
                                <th scope="col"> </th>
                                <th scope="col">Compagnie</th>
                                <th scope="col">Prix Colis < 2kg</th>
                                <th scope="col">Choisir</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php                       
                                foreach($data['livraisons'] as $livreur){
                                   
                                        echo '<td><img class="img-fluid" src="'.WWW_ROOT.'public/images/livraison/'.$livreur->logo.'" alt="Logo" ></td>';
                                        echo "<td>".$livreur->nom_livreur."</td>";
                                        echo "<td>".$livreur->prix_livreur."</td>";                                     
                                        echo '  <td><div class="form-group">
                                                    <div class="custom-control custom-radio">
                                                    <input type="radio" id="customRadio'.$livreur->id_livraison.'" name="id_livraison" class="custom-control-input" 
                                                    value="'.$livreur->id_livraison.'">
                                                    <label class="custom-control-label" for="customRadio'.$livreur->id_livraison.'">Choisir</label>
                                                    </div>
                                                </div></td>';
                                        echo "</tr>";
                                                                     
                                    } 
                                    ?>  
                            </tbody>
                        </table>

                          
                            <input type="hidden" name="id_user" value="<?= $_SESSION['id_user'] ?>" >
                            <input type="submit" class="btn btn-primary" name="ajoutLivraison" value="Ajouter livraison">
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
