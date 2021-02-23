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
                            <h1 class="audrey display-5 mb-5">NOTRE BOUTIQUE</h1>                  

                                <h5>panamahats.com</h5><br>
                                <p> 42 avenue des Champs Elysées 75000 Paris France</p>
                                <br />
                                <h5>APPELEZ-NOUS AU :</h5>
                                <h1 class="audrey gold">0123-456-789</h1>
                                <br />
                               
                                <h5>Horaires d'ouverture</h5>
                                    <p>Du mardi au samedi: 10H - 20H</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <img class="img-fluid w-100 mt-2" src="<?php echo WWW_ROOT; ?>public/images/boutique.jpg" alt="boutique">
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.3741769277403!2d2.3055238154314894!3d48.87014307928855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66fc442c4314f%3A0xd746ac4b7aa7c830!2s42%20Av.%20des%20Champs-%C3%89lys%C3%A9es%2C%2075008%20Paris!5e0!3m2!1sfr!2sfr!4v1614073310120!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>