<?php

	session_start();
	include("connection.php");
	error_reporting(0);


	$_SESSION['eid'];
	$sprofile=$_SESSION['eid'];

	if($sprofile==true)
	{
		$query="SELECT * FROM `employee` WHERE eid='$sprofile'";
		$data=mysqli_query($conn,$query);
		$result=mysqli_fetch_assoc($data);
	}
	else
	{
		header('location:login.php');
	}
		
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

    <title>Home</title>

    
    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
  <style>
    .flex{
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      
    }
    .container{
     
     margin: 0;
     
    }
    .row{
      
      
    }
    .col{
      background: #f7f7f7;
      padding: 64px 8px;
      box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
      transition: all 0.3s;
      border-radius: 4px;
    }
    .col:hover{
      box-shadow: rgba(50, 50, 93, 0.25) 0px 6px 12px -2px, rgba(0, 0, 0, 0.3) 0px 3px 7px -3px;
      
    }
    .second-box{
    margin: 0 48px;
    }
    .col a{
      text-decoration: none;
      color: black;
      display: inline;
      
    }
    
    
  </style>

</head>
<body>
    <div class="flex">
      <div>
        <h1>Home</h1>
      </div>
      <div class="btn-group">
      
        <a href="logout.php" class="btn btn-danger">Logout</a>
      
      </div>
    </div>
    
    <br>
    <h3>
      Hello <?php echo $result['ename']; ?>  
    </h3>

    
    <br>
    <div class="container text-center">
      <div class="row">
        <div class="col"><a href="productlist.php">
          All products
        </a></div>
       <div class="col second-box"> <a href="add-product.php">
          Add product
        </a></div>
        <div class="col">
          Profile
        </div>
      </div>
    </div>
  
    <br>
 
</body>
</html>