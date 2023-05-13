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
	
  // fetch brand options

  
  $bquery ="SELECT `brand_name` FROM `brand`";
  $bresult = $conn->query($bquery);
  if($bresult->num_rows> 0){
    $options= mysqli_fetch_all($bresult, MYSQLI_ASSOC);
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

    <title>Edit Product</title>

    <script src="https://kit.fontawesome.com/4ebe883bff.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery.js"></script>


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

  </style>

</head>
<body onload="discount()">

    <div class="flex">
        <div>
            
        </div>
        <div class="btn-group">
        
            <a href="home.php" class="btn btn-primary">Home</a>
        
        </div>
    </div>
    <br><br>


    <div class="d-flex mb-3">
        <div class="p-2">
            <h1>Edit Product</h1>
        </div>
        
        <div class="p-3">
            <a class="btn btn-primary" href="productlist.php" role="button">All Products</a>
        </div>
        
    </div>
    <br>
   

    <form action="" id="jform" method="POST" enctype="multipart/form-data">
        <label for="exampleInputEmail1" class="form-label">Employee Id</label> 
      <input name="emid" id="emid" class="form-control form-control-sm" type="text" value="<?php echo $result['eid']; ?> " aria-label=".form-control-sm example" readonly>
      <br>
      <label for="exampleInputEmail1" class="form-label">Product Id</label>
      <input name="pid" value="<?php echo $_GET['pid']; ?>" id="pid" class="form-control form-control-sm" type="text" placeholder="Enter product Id" aria-label=".form-control-sm example" readonly>
      <br>
      <label for="exampleInputEmail1" class="form-label">Product Name</label>
      <input name="pname" value="<?php echo $_GET['name']; ?>" id="pname" class="form-control form-control-sm" type="text" placeholder="Enter product name" aria-label=".form-control-sm example" required>
      <br>
      
      <label for="exampleInputEmail1" class="form-label">Product Brand</label>
      <select name="brand_name" id="pbrand" class="form-select form-select-sm" aria-label=".form-select-sm example" required>
      <option value="<?php echo $_GET['brand']; ?>" selected><?php echo $_GET['brand']; ?></option>
        <?php 
          foreach ($options as $option) {
        ?>
        <option value="<?php echo $option['brand_name']; ?>"><?php echo $option['brand_name']; ?> </option>
          <?php 
          }
        ?>
      </select>

      <br>
      <label for="exampleInputEmail1" class="form-label">Edit Image</label> 
      <div class="mb-3">
            
        <input value="<?php echo $GET['img_src']; ?>" class="form-control form-control-sm" id="formFileSm" type="file" name="upload-file">
      </div>
      <br>
      <label for="exampleInputEmail1" class="form-label">Product Price</label>
      <input name="pprice" value="<?php echo $_GET['price']; ?>" id="pprice" class="form-control form-control-sm" type="number" aria-label=".form-control-sm example" onchange="discount()" required>
      <br>
      <label for="exampleInputEmail1" class="form-label">Discount %</label>
      <input name="pdis" value="<?php echo $_GET['discount']; ?>" id="pdis" class="form-control form-control-sm" type="number" aria-label=".form-control-sm example" onchange="discount()" required>
      <br>
      <label for="exampleInputEmail1" class="form-label">Final Price</label>
      <input name="pfinal" id="pfinal" class="form-control form-control-sm" type="number" aria-label=".form-control-sm example" onchange="discount()" readonly>
      <br>
      <input name="submit" class="btn btn-primary" type="submit" value="Update" aria-label=".form-control-sm example">
    </form>
    <?php
        
       
        
        

        if($_POST['submit'])
        {   

            $ueid=$_POST['emid'];
            $upid=$_POST['pid'];
            $upn=$_POST['pname'];
            $upb=$_POST['brand_name'];

            $filename = $_FILES["upload-file"]["name"];
            $tempname = $_FILES["upload-file"]["tmp_name"];
            $folder = "products/".$filename;
            move_uploaded_file($tempname,$folder); 


            $ppr=$_POST['pprice'];
            $pdis=$_POST['pdis'];
            $pfpr=$_POST['pfinal'];


   
         
            $query="UPDATE `product` SET `eid`='$ueid',`pname`='$upn',`brand`='$upb',`img_src`='$folder',`price`='$ppr',`discount`='$pdis',`fprice`='$pfpr' WHERE `pid`='$upid' ";
            $data=mysqli_query($conn,$query);
            if($data)
            {
                echo "<script>alert('Record Updated')</script>";
                ?>
                    <META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/CRUD/productlist.php">

                <?php
            }

                
        }
        
        
        

    ?>

   
   <script>

        function discount(){
          var price = $('#pprice').val();
          var ds = $('#pdis').val();
          var fds = ds / 100;
          var mds = price * fds;
          var final = price - mds;
          
          
          document.getElementById("pfinal").value = final;
         
        }

   </script>

</body>
</html>