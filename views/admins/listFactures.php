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
            <section class="col-sm-12 col-md-9 my-5 text-center">
                <div class="container">
                                         
                            <div class="jumbotron">
                                <h1 class=" audrey display-5 mb-5">CRUD FACTURES</h1>
                                
                                <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Total Articles </th>                               
                                <th scope="col"> Prix Total</th>
                                <th scope="col">Date</th>
                                <th scope="col">Destinataire</th>                               
                                <th scope="col">Action</th>    
                                </tr>
                            </thead>
                            <tbody>
                                <?php                       
                                foreach($data['adminListFactures'] as $facture){
                                   
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo "<td>".$facture->id_facture."</td>";
                                        echo "<td>".$facture->nb_total_articles."</td>";
                                        echo "<td>".$facture->prix_total."</td>";
                                        echo "<td>".$facture->date_facture."</td>";
                                        echo "<td>".$facture->nom_adresse.' '.$facture->prenom_adresse."</td>";                                                                                                                 
                                        echo '<td><a  href="'.WWW_ROOT .'factures/afficheAdminFacture/'.$facture->id_facture.'">
                                        Voir</a></td>';
                                        echo "</tr>";
                                                                     
                                    } 
                                    ?>  
                            </tbody>
                        </table><br>

                            </div>
                                              
                    </div>
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
