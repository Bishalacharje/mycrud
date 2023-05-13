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

    <title>Employee Dashboard | Products</title>

    
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
    table tbody td{
      
    }

  </style>

</head>
<body>
    
  <div class="flex">
      <div>
        
      </div>
      <div class="btn-group">
      
        <a href="home.php" class="btn btn-primary">Home</a>
      
      </div>
  </div>
    <br><br>
   
    
    <div class="d-flex mb-3" id="head-sec">
        <div class="p-2">
          <h2>All Products</h2>
        </div> 
        <div class="p-3"> 
          <a class="btn btn-success" href="add-product.php" role="button">Add new</a>
        </div>
        <div class="ms-auto p-3">
            <input id="myInput" class="form-control form-control-sm" type="text" placeholder="Search..." aria-label=".form-control-sm example">
            
        </div>
      </div>
    <table class="table">
    <?php
        
                    
                    
        $query="SELECT * FROM `product` WHERE `eid`='$sprofile'";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);


        if($total!=0)
        {
    ?>
     <br>
    
      <thead>
        <tr>
        <th scope="col">Image</th>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Brand</th>
          <th scope="col">Price</th>
          <th scope="col">Discount</th>
          <th scope="col">Final Price</th>
          <th scope="col">Status</th>
          <th scope="col" colspan="2">Action</th>
          
        </tr>
      </thead>
      <tbody id="myTable">
      <?php

while ($result=mysqli_fetch_assoc($data)) 
{
    echo "<tr>
            <td><img src='".$result['img_src']."' height='48px' width='48px'/></td>
            <td>".$result['pid']."</td>
            <td>".$result['pname']."</td>
            <td>".$result['brand']."</td>
            <td>".$result['price']."</td>
            <td>".$result['discount']."</td>
            <td>".$result['fprice']."</td>
            <td>
            <a href='product-dt.php?pid=$result[pid]&name=$result[pname]&brand=$result[brand]&img_src=$result[img_src]&price=$result[price]&discount=$result[discount]&fprice=$result[fprice]'>
                   <span> Details </span>
                </a>
            </td>
            <td>
                <a href='edit-p.php?pid=$result[pid]&name=$result[pname]&brand=$result[brand]&img_src=$result[img_src]&price=$result[price]&discount=$result[discount]'>
					        <span>Edit</span>
                </a>
            </td>
            <td>
                <a href='delete-p.php?pid=$result[pid]'>
                   <button> Delete </button>
                </a>
            </td>
     
        </tr>";
}
}
else
{
echo "No record found";
}


?>
    </table>

    <br>
  

    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery.js"></script>
   

</body>
</html>