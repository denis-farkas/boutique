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
                
               
                <div class="jumbotron">
                    <h1 class="display-5 mb-5">TERMES ET CONDITIONS DE VENTE</h1>
                  

           <h5>PanamaHats.com</h5>
            <p>Le service de paiement sécurisé vous permet d'effectuer des transactions simples et sécurisées pour vos achats</p>
            <p>- En utilisant le service de paiement sécurisé, vous bénéficiez de la protection VerifPay : votre argent est en sécurité jusqu'à la fin de la transaction et une équipe vous est dédiée en cas de problème. 
            </p>


<p>La suppression d'une l'annonce par votre vendeur n'a aucun impact sur votre transaction.</p> 

           <p>N° de téléphone: 0123-456-789 ; Adresse du courrier électronique: panamahats@panamahats.com</p> 
            <p>RCS (ou Répertoire des métiers) de Paris n° XYZ-589-HJ-789 </p>

            <p>N° individuel d'identification fiscal </p>

           <h5>Conditions générales de vente des produits vendus sur www.PanamaHats.com </h5>  

           <h6>Date de dernière mise à jour 18 février 2021,</h6> 

            <h5>Article 1 - Objet</h5>

            <p>Les présentes conditions régissent les ventes par la société panamahats.com de chapeaux de palme toquilla équatoriens.</p>
            <h5>Article 2 - Prix</h5>

                
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>