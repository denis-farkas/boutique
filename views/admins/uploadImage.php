<?php
    
// Check if the form was submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Check if file was uploaded without errors
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];
    
        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Error: Please select a valid file format.");
    
        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: File size is larger than the allowed limit.");
    
        // Verify MYME type of the file
        if(in_array($filetype, $allowed)){
            // Check whether file exists before uploading it
            if(file_exists(WWW_ROOT."public/images/upload/" . $filename)){
                echo $filename . " is already exists.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"],"public/images/hats_big/" . $filename);
               
                echo "Your file was uploaded successfully.";
            } 
        } else{
            echo "Error: There was a problem uploading your file. Please try again."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}

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
                        <h5>Upload Image</h5>
                        <form action="" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <h2>Upload Image</h2>
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
