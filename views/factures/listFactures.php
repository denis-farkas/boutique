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
            <div class="row">                               
                <img class="ml-5 img-fluid" src="<?php echo WWW_ROOT; ?>public/images/logo.png" alt="Logo">                 
                <h2 class="mt-5">PANAMA HATS<br /><small class="text-muted">Chapeaux de Légende</small></h2>                              
            </div>
        </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav ml-5 mx-auto">                        
                <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/montecristi">MONTECRISTI</a></h3>
                    </li>
                    <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/fedora">FEDORA</a></h3>
                    </li>
                    <li class="nav-item">
                        <h3><a class="nav-link" href="<?= WWW_ROOT ?>produits/mode">MODE</a></h3>
                    </li>                
                               
                </ul>
            </nav>
                                     
          
                
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/palme.jpg" alt="Palme">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/fibre.jpg" alt="Toquilla">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="<?php echo WWW_ROOT; ?>public/images/process.jpg" alt="Process">
                        </div>
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
            <section class="col-sm-12 col-md-9 my-5 text-center">
                <div class="container">
                                         
                            <div class="jumbotron">
                                <h1 class=" audrey display-5 mb-5">MES COMMANDES</h1>
                                
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
                                foreach($data['listFactures'] as $facture){
                                   
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo "<td>".$facture->id_facture."</td>";
                                        echo "<td>".$facture->nb_total_articles."</td>";
                                        echo "<td>".$facture->prix_total."</td>";
                                        echo "<td>".$facture->date_facture."</td>";
                                        echo "<td>".$facture->nom_adresse.' '.$facture->prenom_adresse."</td>";                                                                                                                 
                                        echo '<td><a  href="'.WWW_ROOT .'factures/afficheFacture/'.$facture->id_facture.'">
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