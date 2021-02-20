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
                    <div class="jumbotron">
                        <h3>Récapitulatif de votre commande</h3>
                        <div class="row">
                            <div class="col-md-4">
                            </div>

                            <div class="col-md-4">
                            </div>

                            <div class="col-md-4">
                                <h5>Informations détaillées<br>
                                 commande N° <?= $_SESSION['id_commande'] ?>Y7BU</h6>
                                <h6>Date de commande <?php echo date('d/m/Y'); ?></h6>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                            <h5 class="mb-3">Informations Client</h5>                                 
                                <h6>Adresse de facturation </h6>
                                <p><?php echo $data['user']->civilite.' '.$data['user']->nom.' '.$data['user']->prenom ?></p>
                                <p><?php echo $data['adresseDomicile']->num_rue.' '.$data['adresseDomicile']->nom_rue.' '.$data['adresseDomicile']->batiment ?></p>
                                <p><?php echo $data['adresseDomicile']->code_postal.' '.$data['adresseDomicile']->ville.' '.$data['adresseDomicile']->pays ?></p>
                            </div>

                            <div class="col-md-4">
                            </div>

                            <div class="col-md-4"><br><br>
                            <h6>Adresse de livraison </h6>
                                <p><?php echo $data['adresse']->nom_adresse.' '.$data['adresse']->prenom_adresse ?></p>
                                <p><?php echo $data['adresse']->num_rue.' '.$data['adresse']->nom_rue.' '.$data['adresse']->batiment ?></p>
                                <p><?php echo $data['adresse']->code_postal.' '.$data['adresse']->ville.' '.$data['adresse']->pays ?></p>
                            </div>
                        </div>

                        <div class="row">
                            <h4 class="m-3">Informations relatives au produit </h4>
                           
                        </div>
                           
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
                                    echo "</td>";
                                    $remise= $commande->prix_produit -(($commande->prix_produit*$commande->remise)/100);                                 
                                    echo "<td>".$remise."</td>";  
                                    echo "</tr>";  
                                    $total= $total+($commande->quantite_article*$remise);                                                                   
                                    } 
                                    ?>  
                            </tbody>
                            </table>                         
                            <div class="row">
                                <div class="col-md-6">
                                </div> 

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Sub-Total </h5>
                                        </div> 

                                        <div class="col-md-6">
                                            <h5><?= $total ?> €</h5>
                                        </div>  
                                    </div>    
                                </div>  
                            </div>    
                            <div class="row">
                                <div class="col-md-6">
                                <a type="button" class="btn btn-warning m-5" href="<?= WWW_ROOT ?>pages/merci" >Payer</a><br><br>
                                </div> 

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5>Frais de port</h5><br><br>
                                            <h4>TOTAL</h4>
                                            <h6>Mode de réglement</h6>
                                        </div> 

                                        <div class="col-md-6">
                                            <h5><?= $data['livraison']->prix_livreur ?> €</h5><br><br>
                                            <h4><?php echo $total + $data['livraison']->prix_livreur; ?> €</h4>
                                            <h6><?= $data['paiement']->nom_paiement ?></h6>
                                        </div>
                                    </div>
                                    <p><?= $data['paiement']->mode_paiement ?></p>                                          
                                </div>  
                            </div>    
                                                   
                    </div>  

                </div>              
               
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
