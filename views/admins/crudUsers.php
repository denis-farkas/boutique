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
                    
                    <div class="col-md-12">
                        <h5>CLIENTS</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Civilité</th>
                                <th scope="col">Prénom</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Téléphone</th>
                                <th scope="col">Email</th>
                                <th scope="col">Date enregistrement</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php                       
                                foreach($data['users'] as $user){
                                   
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo "<td>".$user->id_user."</td>";
                                        echo "<td>".$user->civilite."</td>";
                                        echo "<td>".$user->prenom."</td>";
                                        echo "<td>".$user->nom."</td>";
                                        echo "<td>".$user->telephone."</td>";
                                        echo "<td>".$user->email."</td>";
                                        echo "<td>".$user->date_registre."</td>";
                                                                           
                                        echo '<td><a  href="'.WWW_ROOT .'admins/vueProfil/'.$user->id_user.'">
                                        Voir</a></td>';
                                        echo "</tr>";                                                                  
                                    } 
                                    ?>  
                            </tbody>
                        </table>                        
                    </div> 
                </div>  
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
