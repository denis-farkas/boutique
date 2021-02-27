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
                <h2 id="cache" class="mt-5 pt-5 champain">PANAMA HATS<br /><small>Chapeaux de Légende</small></h2>                              
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
                    
                    <div class="col-lg-8 col-md-8">
                        <h2>Le profil de <?php echo $data['user']->civilite.' '.$data['user']->nom.' '.$data['user']->prenom; ?></h2>
                                <ul class="list-group">
                                    <br />
                                    <li class="list-group-item">Téléphone : <?= $data['user']->telephone ?></li>
                                    <br />
                                    <li class="list-group-item">Email : <?= $data['user']->email ?></li>
                                    <br />
                                    <li class="list-group-item">Adresse du domicile : <?php echo $data['user']->num_rue.', '.$data['user']->nom_rue.' '.$data['user']->batiment; ?>
                                    <br><?php echo $data['user']->code_postal.' '.$data['user']->ville.', '.$data['user']->pays; ?></li>
                                    <br />
                                </ul>
                    </div>
                    <div class="col-lg-6 col-md-6">                        
                    </div>  
                </div>
            </section>
        </div>
    
        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
