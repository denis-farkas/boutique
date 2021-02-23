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
                    <form class="form-inline ml-5 my-2 my-lg-0" method="post" action="<?php echo WWW_ROOT; ?>pages/paiement">
                        <input class="form-control mr-sm-2" type="text" name="nom" placeholder="Rechercher">
                        <button type="submit" name="search"><i class="fas fa-search fa-sm"></i></button>
                    </form>
                </nav>
            </div>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <ul class="navbar-nav ml-5 mx-auto" >

                <?php
                if(isset($data['search']) && (!empty($data['search']))){
                    echo '<li class="nav-item mt-2"> Résultat(s) de votre recherche :</li>';
                    echo '<hr>';
                    foreach($data['search'] as $search){
                        echo '<li class="nav-item"><a class="nav-link" href="'.WWW_ROOT.$search->lien.'">'.$search->mot.'</a></li>';
                    }
                }elseif(isset($data['search']) && (empty($data['search']))){ 
                    echo '<h6>Pas de suggestions pour ce mot.</h6>';
                }
                ?>
                </ul>
            </nav>    
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
                            <h1 class="audrey display-5 mb-5"> Le service de paiement sécurisé</h1>                  

                                <h5>Comment fonctionne le service de paiement sécurisé ?</h5><br>
                                    <p>Le service de paiement sécurisé vous permet d'effectuer des transactions simples et sécurisées pour vos achats.</p>
                                    <p>En utilisant le service de paiement sécurisé, vous bénéficiez de la protection VerifPay : votre argent est en sécurité jusqu'à la fin de la transaction et une équipe vous est dédiée en cas de problème. 
                                    </p><br>

                                <h5>Quels sont les moyens de paiement acceptés ?</h5><br>
                                    <p>Dans le cadre des transactions effectuées via le service de paiement sécurisé, les moyens de paiement acceptés sont:<br>

                                    Les cartes de paiement en cours de validité de type Visa, Carte Bleu et compte Paypal.</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid w-100 mt-2" src="<?php echo WWW_ROOT; ?>public/images/fibre-big.jpg" alt="fibre">
                        </div>
                    </div>
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>