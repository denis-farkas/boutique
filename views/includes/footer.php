  <footer>
                <div class="container pt-1">
                <div class="col-md-12 mt-2">
                    
                                                 
                                       
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <h4 class="gold">LETTRE D'INFORMATIONS</h4>
                            <form class="form-inline ml-2 my-2 my-lg-0">
                            <input class="form-control mr-sm-2" type="text" placeholder="Saisissez votre e-mail">
                            <button type="submit" class="btn btn-secondary ml-1S"><i class="fa fa-envelope fa-sm"></i></button>   
                            </form>
                     
                        <ul class="navbar-nav ml-5 ">
                            <li class="nav-item ml-5">
                            <h4 class="gold ml-5">NOUS SUIVRE:</h4>   
                            </li>                        
                            <li class="nav-item">
                            <i class="fab fa-facebook-square fa-lg"></i>
                            </li>
                            <li class="nav-item">
                            <i class="fab fa-twitter fa-lg"></i>
                            </li>                                   
                        </ul>
                        </nav>
                  
                </div> 
                <div class="row mt-5">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-4">
                                <h5 class="ml-3">CATÉGORIES</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a class="nav-link" href="<?php echo WWW_ROOT.'produits/montecristi'; ?>">Montecristi</a></li>
                                    <li class="list-group-item"><a class="nav-link" href="<?php echo WWW_ROOT.'produits/fedora'; ?>">Fedora</a></li>
                                    <li class="list-group-item"><a class="nav-link" href="<?php echo WWW_ROOT.'produits/mode'; ?>">Mode</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5 class="ml-3" >INFORMATIONS</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a class="nav-link" href="<?php echo WWW_ROOT.'pages/index'; ?>">Meilleures Ventes</a></li>
                                    <li class="list-group-item"><a class="nav-link" href="<?php echo WWW_ROOT.'pages/magasin'; ?>">Notre magasin</a></li>
                                    <li class="list-group-item"><a class="nav-link" href="<?php echo WWW_ROOT.'pages/contact'; ?>">Contactez-nous</a></li>
                                    <li class="list-group-item"><a class="nav-link" href="<?php echo WWW_ROOT.'pages/termes'; ?>">Conditions de vente</a></li>
                                    <li class="list-group-item"><a class="nav-link" href="<?php echo WWW_ROOT.'pages/about'; ?>">A notre sujet</a></li>
                                </ul>
                            </div>
                            <div class="col-md-4">
                                <h5 class="ml-3" >MON COMPTE</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><a class="nav-link" href="<?php if(isset($_SESSION['id_user'])){echo WWW_ROOT.'factures/listFactures/'.$_SESSION['id_user'];} ?>">Mes commandes</a></li>
                                    <li class="list-group-item"><a class="nav-link" href="<?php if(isset($_SESSION['id_user'])){echo WWW_ROOT.'adresses/listAdresses/'.$_SESSION['id_user'];} ?>">Mes adresses</a></li>
                                    <li class="list-group-item"><a class="nav-link" href="<?php if(isset($_SESSION['id_user'])){echo WWW_ROOT.'users/profil';} ?>">Mes informations</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 border-left">
                        
                        <h5>INFORMATIONS SUR PANAMAHATS.COM</h5>
                        <p>panamahats.com , 42 avenue des Champs Elysées 75000 Paris France</p>
                        <br />
                        <h5>APPELEZ-NOUS AU :</h5>
                        <h2 class="gold">0123-456-789</h2>
                        <br />
                        <p>Email: panamahats@panamahats.com</p>
                        <br />
                        <p>Copyrights 2021, panamahats.com</p>
                    
                    </div>       
                </div>
                
            </footer>
        </div>
        <script src="<?php echo WWW_ROOT; ?>public/js/jquery.min.js"></script>
        
        <script src="<?php echo WWW_ROOT; ?>public/js/bootstrap.bundle.min.js"></script>
    </body>
</html>