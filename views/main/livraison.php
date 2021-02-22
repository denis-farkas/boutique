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
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <form class="form-inline ml-5 my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Rechercher">
                        <button type="submit" class="btn btn-secondary ml-1S"><i class="fas fa-search"></i></button>
                    </form>
                </nav>
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
                    <div class="row">
                        <div class="col-md-8">
                            <div class="jumbotron">
                                <h1 class="display-5 mb-5">LES LIVRAISONS</h1><br>
                                <hr class="my-4 gold"><br>
                                <p>Le service de livraison de Colissimo - Laposte.fr avec suivi est destiné aux chapeaux  économiques sur le territoire français.
                                L'envoi est effectué en 2-3 jours ouvrables pour un prix unique de 15 euros, comprenant les frais annexes et l'assurance.
                                </p>
                                <p>Pour les commandes de plus de 100 euros nous privilégions le courrier  Chronopost.
                                Nous offrons ce service unique pour un coût unique de 25 euros  pour le territoire national. La couverture d'assurance-risque est en effet plus 
                                performante, pour ce type de produit.
                                </p>
                                <p>A l'échelle internationale nous travaillons uniquement avec la compagnie DHL, pour la qualité de son service.   
                                </p>
                                <h6>- Combien de temps pour recevoir ma livraison?</h6>

                                <p>Nous avons besoin de deux à 5 jours pour préparer votre chapeau. Le reste avant réception est en fonction de votre domicile et du service contracté.</p>
                                    

                                <h6>-Comment puis je suivre ma livraison?</h6>

                                <p>Nous envoyons un email avec la confirmation de l'envoi et les références du colis.</p>

                                <P>Pour les envois internationaux, DHL assure le suivi quelque soit la localisation de votre domicile.</p>

                                <h5><a class="nav-link" href="<?= WWW_ROOT ?>pages/index">Bons Achats, sur www.panamaHats.com</a></h5>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid w-100 mt-2" src="<?php echo WWW_ROOT; ?>public/images/tissage2.jpg" alt="tissage">
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>