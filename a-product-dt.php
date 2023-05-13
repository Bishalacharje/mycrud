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

    <title>Admin | Product Details</title>

    
    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <style>
    .flex{
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .flex-right{
      
      display: flex;
      align-items: center;
      justify-content: space-between;
    }
    .flex-right h5{
      padding-right: 8px;
    }
    a{ 
      text-decoration: none;
    }
    h5{
        color:#696969;
    }
    .dt-value{
        font-weight: normal;
        color: #000;
        margin-left: 8px;
        font-size: 16px;
    }
    .img-container{
    margin: 4px 8px;
    width: 148px;
    height: 148px;
    border: 2px solid gray;
    overflow: hidden;
    background: rgb(231, 231, 231);
    border-radius: 4px;
    margin: 0;
    margin-bottom: 8px;
   }
   .img-container img{
    width: 148px;
    height: 148px;
   }

  </style>

</head>
<body>
    
  <div class="flex">
      <div>
        
      </div>
      <div class="btn-group">
      
        <a href="dashboard.php" class="btn btn-primary">Home</a>
      
      </div>
  </div>
    
    <div class="d-flex mb-3">
        <div class="p-2">
            <h1>Product Details</h1>
        </div>
        
        <div class="p-3">
            <a class="btn btn-primary" href="a-productlist.php" role="button">All Products</a>
        </div>
        
    </div>
    <br>
    <div class="img-container">
      <img src="<?php echo $_GET['img_src']; ?>" alt="">
    </div>
    <h5>Product Id:<span class="dt-value"> <?php echo $_GET['pid']; ?> </span></h5>
    <h5>Product Name:<span class="dt-value"> <?php echo $_GET['name']; ?> </span></h5>
    <h5>Brand:<span class="dt-value"> <?php echo $_GET['brand']; ?> </span></h5>
    <h5>Product Price:<span class="dt-value"> <?php echo $_GET['price']; ?> &#8377</span></h5>
    <h5>Discount:<span class="dt-value"> <?php echo $_GET['discount']; ?> %</span></h5>
    <h5>Final Price:<span class="dt-value"> <?php echo $_GET['fprice']; ?> &#8377</span></h5>
   
    
    

    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery.js"></script>
   

</body>
</html>