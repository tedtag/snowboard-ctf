<!DOCTYPE html>

<html lang="en-US">

  <!-- Head -->
  <?php
    include 'head.php';
  ?>

  <!-- Body -->
  <?php
     if(isset($_FILES['image'])){
        $errors= array();
        $file_name = $_FILES['image']['name'];
        $file_size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];
        $file_type = $_FILES['image']['type'];
        $file_exploded = explode('.',$_FILES['image']['name']);
        $file_ext = strtolower(end($file_exploded));
        $mimetype = mime_content_type($_FILES['image']['tmp_name']);
        
        $mimetypes= array('image/jpeg', 'image/gif', 'image/png');
        
        if(in_array($mimetype,$mimetypes)=== false){
           $errors[]="Only image files are allowed.";
        }
        
        if($file_size > 2097152) {
           $errors[]='File size must be less than 2 MB';
        }
        
        if(empty($errors)==true) {
           move_uploaded_file($file_tmp,"./super_secret_uploads_folder/".$file_name);
           echo "<div class='.alert-success'>Upload Success</div>";
        }else{
           print_r($errors);
        }
     }
  ?>
   <body>
    <?php include 'header.php';?>
      
    <main class="container">
       <h3>Upload a Custom Board Design</h3>

      <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input type="submit"/>
      </form>

    </main>

    <?php include 'footer.php'; ?>
   </body>

</html>