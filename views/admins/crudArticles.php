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
                        <h5>MONTECRISTI</h5>
                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Genre</th>
                                <th scope="col">Qualité</th>
                                <th scope="col">Taille</th>
                                <th scope="col">Couleur</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantité</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php                       
                                foreach($data['articles'] as $article){
                                    if($article->origine == 'Montecristi'){
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo "<td>".$article->id_article."</td>";
                                        echo "<td>".$article->genre."</td>";
                                        echo "<td>".$article->qualite."</td>";
                                        echo "<td>".$article->nom_taille."</td>";
                                        echo "<td>".$article->nom_couleur."</td>";
                                        echo "<td>".$article->image."</td>";
                                        echo "<td>".$article->date_registre."</td>";
                                        echo "<td>".$article->prix."</td>";
                                        echo "<td>".$article->quantite."</td>";
                                    
                                        echo '<td><a  href="'.WWW_ROOT .'admins/formArticle/'.$article->id_article.'">
                                        Voir</a></td>';
                                        echo "</tr>";
                                        }                             
                                    } 
                                    ?>  
                            </tbody>
                        </table><br>

                        <h5>CUENCA</h5>                        
                        <table class="table table-hover">
                            <thead>
                                <tr class="table-active">
                                <th scope="col">ID </th>
                                <th scope="col">Genre</th>
                                <th scope="col">Qualité</th>
                                <th scope="col">Taille</th>
                                <th scope="col">Couleur</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Prix</th>
                                <th scope="col">Quantité</th>
                                
                                </tr>
                            </thead>
                            <tbody>
                                <?php                       
                                foreach($data['articles'] as $article){
                                    if($article->origine == 'Cuenca'){
                                        echo "<tr>";//affiche en boucle les données de la table
                                        echo "<td>".$article->id_article."</td>";
                                        echo "<td>".$article->genre."</td>";
                                        echo "<td>".$article->qualite."</td>";
                                        echo "<td>".$article->nom_taille."</td>";
                                        echo "<td>".$article->nom_couleur."</td>";
                                        echo "<td>".$article->image."</td>";
                                        echo "<td>".$article->date_registre."</td>";
                                        echo "<td>".$article->prix."</td>";
                                        echo "<td>".$article->quantite."</td>";
                                    
                                        echo '<td><a  href="'.WWW_ROOT .'admins/formArticle/'.$article->id_article.'">
                                        Voir</a></td>';
                                        echo "</tr>";
                                        }                             
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
