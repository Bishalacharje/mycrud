<?php
error_reporting(0);

?>


<?php

	session_start();
	include("connection.php");
	error_reporting(0);

  
	
		
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Image Upload</title>

    
    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  

</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            
            <input class="form-control form-control-sm" id="formFileSm" type="file" name="upload-file">
        </div>
        <input name="submit" class="btn btn-primary" type="submit" value="Upload" aria-label=".form-control-sm example">
    </form>

    <?php

        $filename = $_FILES["upload-file"]["name"];
        $tempname = $_FILES["upload-file"]["tmp_name"];
        $folder = "products/".$filename;
        
        move_uploaded_file($tempname,$folder); 

        echo "<img src='$folder'>";
   ?>

<img src="" alt="">
    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery.js"></script>
   

</body>
</html>