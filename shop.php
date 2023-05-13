<?php

	
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

    <title> Shop</title>

    
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
    button{
      background: red;
      font-size: 12px;
      padding: 3px 6px;
      color: #ffffff;
      border-radius: 3px;
      border: none;
    }
    span{
      background: #0B5ED7;
      font-size: 12px;
      padding: 3px 6px;
      color: #ffffff;
      border-radius: 3px;
      border: none;
    }
    .card{
        display: inline-block;
        margin: 0px 8px 16px 8px;
        cursor: pointer;
    }
    .card-img-top{
        object-fit: contain;
        height: 200px;
    }
    .card-text{
       
        margin: 0;
    }
    .price{
        text-decoration: line-through;
        background: transparent;
        font-weight: 200;
        color: #000;
        
    }
    .discount{
        background: transparent;
        font-weight: 500;
        color: green;
        font-size: 16px;
        
        
    }
    .fprice{
        background: transparent;
        font-weight: bold;
        color: #000;
        font-size: 16px;
       
    }
    .card-body .btn{
        margin-top: 8px;
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
    <br><br>
   <?php
     $query="SELECT * FROM `product`";
     $data=mysqli_query($conn,$query);
     while ($result=mysqli_fetch_assoc($data)) {

        $pname= $result['pname'];
        $pimg= $result['img_src'];
        $pprice= $result['price'];
        $pdis= $result['discount'];
        $pfinalp= $result['fprice'];

        echo "<a href='#'><div class='card' style='width: 18rem;'>
            <img src='$pimg' class='card-img-top' alt='...'>
            <div class='card-body'>
                <h5 class='card-title'>$pname</h5>
                <p class='card-text'><span class='price'>$pprice &#8377</span><span class='discount'>$pdis% Off</span></p>
                <p class='card-text'><span class='fprice'>$pfinalp &#8377</span></p>
                <a href='cart.php' class='btn btn-primary btn-sm'>Add to cart</a>
            </div>
        </div> </a>";
     }

    ?>
    
  
    
    <br>
  

    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery.js"></script>
   

</body>
</html>