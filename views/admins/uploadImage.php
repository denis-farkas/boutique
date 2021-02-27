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
            <div class="row banner banner_image1 pt-3">                               
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
                    <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-md-6">
                        <h5>Upload Image</h5><br>
                        <form action="" method="post" enctype="multipart/form-data">
                        <fieldset>
                            
                            <p class="invalidFeedback"><?= $data['error'] ?></p>
                           <?php if(!empty($data['filename'])){echo '<img class="ml-5 img-fluid mt-5" src="'.WWW_ROOT.'public/images/hats_big/'.$data['filename'].'" alt="upload"> ';} ?>    
                            <div class="form-group">
                                <label for="fileSelect">Image:</label>
                                <input type="file" name="photo" id="fileSelect">
                                <input type="submit" class="btn btn-primary" name="submit" value="Upload">
                                <p><strong>Note:</strong> Seulement .jpg, .jpeg, .gif, .png formats sont permis avec une taille max  de 5 MB.</p>
                            </div>
                        </fieldset>
                        </form>        
                    </div> 
                    <div class="col-lg-4"></div>
                    </div>
                </div>  
              
            </section>
        </div>


        <?php
        require ROOT . '/views/includes/footer.php';
        ?>
