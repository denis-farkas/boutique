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
            <div class="row banner banner_image3 pt-3">                               
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
                    <div class="jumbotron">
                        <h3>FACTURE</h3>
                        <div class="row">
                            <div class="col-md-4">
                            </div>

                            <div class="col-md-4">
                            </div>

                            <div class="col-md-4">
                                <h5>Informations détaillées<br>
                                 Facture N° <?= $data['facture']->id_facture ?>Y7BU</h6>
                                <h6>Date de facturation <?php echo $data['facture']->date_facture; ?></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                            <h5 class="mb-3">Informations Livraison</h5>                                 
                                <h6>Adresse de Livraison </h6>
                                <p><?php echo $data['adresse']->prenom_adresse.' '.$data['adresse']->nom_adresse; ?></p>
                                <p><?php echo $data['adresse']->num_rue.' '.$data['adresse']->nom_rue.' '.$data['adresse']->batiment ?></p>
                                <p><?php echo $data['adresse']->code_postal.' '.$data['adresse']->ville.' '.$data['adresse']->pays ?></p>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4"></div>
                        </div>
                        
                        <h4 class="m-3">Informations relatives au produit </h4>
                                                                          
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                    <th scope="col">Produits commandés</th>
                                    <th scope="col">Taille</th>
                                    <th scope="col">Quantité</th>
                                    <th scope="col">Remise</th>
                                    <th scope="col">Montant en € TTC</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $total=0;                      
                                foreach($data['commandes'] as $commande){
                                   
                                    echo '<td>'.$commande->categorie_produit.' '.$commande->nom_produit.'</td>';
                                    echo "<td>".$commande->nom_taille."</td>";
                                    echo "<td>".$commande->quantite_article."</td>";
                                    echo "<td>";
                                    if($commande->remise>0){
                                        echo $commande->remise." %";
                                    }
                                    $remise = $commande->prix_produit - (($commande->prix_produit * $commande->remise)/100);
                                    echo "</td>";            
                                    echo "<td>".$remise."</td>";  
                                    echo "</tr>";  
                                    } 
                                    ?>  
                            </tbody>
                            </table>                         
                            <div class="row">
                                <div class="col-md-4 w-100">
                                    <div class="row">
                                    <h5 class="ml-5">Sub-Total : </h5>
                                    <h5><?= $data['facture']->prix_total_articles ?> €</h5>
                                    </div>
                                </div>  
                                   
                                <div class="col-md-8 w-100">
                                    <div class="row">
                                        <div class="col-md-6 text-right">
                                            <h4>TOTAL :</h4>
                                            <h6>Mode de réglement :</h6>
                                        </div> 

                                        <div class="col-md-6 text-left">  
                                            <h4><?php echo $data['facture']->prix_total ; ?> €</h4>
                                            <h6><?= $data['paiement']->nom_paiement ?></h6>
                                        </div>
                                    </div>
                                    <p class="text-center"><?= $data['paiement']->mode_paiement ?></p>                                          
                                </div>  
                            </div>    
                                                   
                    </div>  

                </div>              
               
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
