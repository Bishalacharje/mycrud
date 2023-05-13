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

    <title>Employee | Product Details</title>

    
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

   .grid{
    
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 48px;
   }
   .grid .left-grid{
    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
    padding: 32px;
    border-radius: 4px;
   }
   .grid .right-grid{
    
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
    
    <div class="d-flex mb-3">
        <div class="p-2">
            <h1>Product Details</h1>
        </div>
        
        <div class="p-3">
            <a class="btn btn-primary" href="productlist.php" role="button">All Products</a>
        </div>
        
    </div>
    <br>
     

       
    <div class="grid">
      <div class="left-grid">
        <div class="img-container">
          <img src="<?php echo $_GET['img_src']; ?>" alt="">
        </div>
        <h5>ID :<span class="dt-value"> <?php echo $_GET['pid']; ?> </span></h5>
        <h5>Name :<span class="dt-value"> <?php echo $_GET['name']; ?> </span></h5>
        <h5>Brand :<span class="dt-value"> <?php echo $_GET['brand']; ?> </span></h5>
        <h5>Product Price :<span class="dt-value"> <?php echo $_GET['price']; ?> &#8377</span></h5>
        <h5>Discount :<span class="dt-value"> <?php echo $_GET['discount']; ?> %</span></h5>
        <h5>Final Price :<span class="dt-value"> <?php echo $_GET['fprice']; ?> &#8377</span></h5>
        <h5>Size :</h5>
        <h5>Description :</h5>
      </div>
      <div class="right-grid">
        <h2>Add additional details</h2>
        <form action="" id="jform" method="POST" enctype="multipart/form-data">

          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">ID :</label>
            <div class="col-sm-10">
              <input type="text" name="poid" readonly class="form-control-plaintext" id="" value="<?php echo $_GET['pid']; ?>">
            </div>
          </div>

        
          
          <label for="exampleInputEmail1" class="form-label">Size</label>
          <select name="psize" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
            <option value="-"> Select Size</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
          </select>
          <br>
          <label for="exampleInputEmail1" class="form-label">Description</label>
          <textarea name="pdis" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> 
          <br>
          
          <input name="submit" class="btn btn-primary" type="submit" value="Add" aria-label=".form-control-sm example">
        </form>


        <?php

            
          if($_POST['submit'])
          {   

              
              $pnid=$_POST['poid'];
              
            
              $psz=$_POST['psize'];
              $pds=$_POST['pdis'];
              
              
                  
                  $query="INSERT INTO `product-_dt`(`pid`, `pimg`, `psize`, `pdescription`) VALUES ('$pnid','$folder','$psz','$pds')";
                  $data=mysqli_query($conn,$query);
                  if($data)
                  {
                      echo "<script>alert('Additional Details Added')</script>";
                    
                      
                  }
                  
                  ?>
                  <META HTTP-EQUIV="Refresh" CONTENT="0 ;URL= http://localhost/CRUD/product-dt.php">
      
                <?php
                  
          }

        ?>

      </div>

    </div> 
        
   
    
    
   
    <br><br>

   
    
  


    <script src="jquery-3.6.1.min.js"></script>
    <script src="jquery.js"></script>
   

</body>
</html>